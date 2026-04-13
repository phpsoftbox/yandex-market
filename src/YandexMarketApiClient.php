<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket;

use Closure;
use JsonException;
use PhpSoftBox\YandexMarket\Api\AuthApi;
use PhpSoftBox\YandexMarket\Api\BidsApi;
use PhpSoftBox\YandexMarket\Api\BusinessesApi;
use PhpSoftBox\YandexMarket\Api\CampaignsApi;
use PhpSoftBox\YandexMarket\Api\CategoriesApi;
use PhpSoftBox\YandexMarket\Api\ChatsApi;
use PhpSoftBox\YandexMarket\Api\ContentApi;
use PhpSoftBox\YandexMarket\Api\DeliveryOptionsApi;
use PhpSoftBox\YandexMarket\Api\DeliveryServicesApi;
use PhpSoftBox\YandexMarket\Api\GoodsFeedbackApi;
use PhpSoftBox\YandexMarket\Api\GoodsQuestionsApi;
use PhpSoftBox\YandexMarket\Api\GoodsStatsApi;
use PhpSoftBox\YandexMarket\Api\LogisticPointsApi;
use PhpSoftBox\YandexMarket\Api\OfferMappingsApi;
use PhpSoftBox\YandexMarket\Api\OffersApi;
use PhpSoftBox\YandexMarket\Api\OperationsApi;
use PhpSoftBox\YandexMarket\Api\OrdersApi;
use PhpSoftBox\YandexMarket\Api\OrdersStatsApi;
use PhpSoftBox\YandexMarket\Api\OutletLicensesApi;
use PhpSoftBox\YandexMarket\Api\OutletsApi;
use PhpSoftBox\YandexMarket\Api\PricesApi;
use PhpSoftBox\YandexMarket\Api\PromosApi;
use PhpSoftBox\YandexMarket\Api\RatingsApi;
use PhpSoftBox\YandexMarket\Api\RegionsApi;
use PhpSoftBox\YandexMarket\Api\ReportsApi;
use PhpSoftBox\YandexMarket\Api\ReturnsApi;
use PhpSoftBox\YandexMarket\Api\ShipmentsApi;
use PhpSoftBox\YandexMarket\Api\StocksApi;
use PhpSoftBox\YandexMarket\Api\TariffsApi;
use PhpSoftBox\YandexMarket\Api\WarehousesApi;
use PhpSoftBox\YandexMarket\Dto\YandexMarketResponseDtoMap;
use PhpSoftBox\YandexMarket\Retry\DefaultRetryableRequestPolicy;
use PhpSoftBox\YandexMarket\Retry\NativeSleeper;
use PhpSoftBox\YandexMarket\Retry\RateLimitRetryOptions;
use PhpSoftBox\YandexMarket\Retry\RetryableRequestPolicyInterface;
use PhpSoftBox\YandexMarket\Retry\SleeperInterface;
use PhpSoftBox\YandexMarket\Retry\YandexMarketRetryEvent;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;

use function array_key_first;
use function http_build_query;
use function in_array;
use function is_array;
use function is_finite;
use function is_numeric;
use function is_string;
use function json_decode;
use function json_encode;
use function ltrim;
use function max;
use function rtrim;
use function strtotime;
use function strtoupper;
use function time;
use function trim;

use const JSON_THROW_ON_ERROR;
use const JSON_UNESCAPED_SLASHES;
use const JSON_UNESCAPED_UNICODE;
use const PHP_QUERY_RFC3986;

final class YandexMarketApiClient
{
    private string $baseUrl;
    private readonly int $rateLimitMaxAttempts;
    private readonly RetryableRequestPolicyInterface $rateLimitRequestPolicy;
    private readonly SleeperInterface $rateLimitSleeper;

    /** @var (Closure(YandexMarketRetryEvent): void)|null */
    private readonly ?Closure $onRateLimitRetry;

    public function __construct(
        private readonly string $token,
        private readonly ClientInterface $httpClient,
        private readonly RequestFactoryInterface $requestFactory,
        private readonly StreamFactoryInterface $streamFactory,
        private readonly string $authHeader = 'Api-Key',
        private readonly string $authorizationScheme = '',
        string $apiBase = 'https://api.partner.market.yandex.ru',
        ?RateLimitRetryOptions $rateLimitRetry = null,
    ) {
        $rateLimitRetry ??= new RateLimitRetryOptions();

        $this->rateLimitMaxAttempts   = $rateLimitRetry->maxAttempts;
        $this->rateLimitRequestPolicy = $rateLimitRetry->requestPolicy ?? new DefaultRetryableRequestPolicy();
        $this->rateLimitSleeper       = $rateLimitRetry->sleeper ?? new NativeSleeper();
        $this->onRateLimitRetry       = $rateLimitRetry->onRetry;
        $this->baseUrl                = rtrim($apiBase, '/');
    }

    /**
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function get(string $path, array $query = []): YandexMarketApiResponse
    {
        return $this->request($path, method: 'GET', query: $query);
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function post(string $path, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->request($path, $payload, 'POST', $query);
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function put(string $path, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->request($path, $payload, 'PUT', $query);
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function patch(string $path, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->request($path, $payload, 'PATCH', $query);
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function delete(string $path, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->request($path, $payload, 'DELETE', $query);
    }

    public function orders(): OrdersApi
    {
        return new OrdersApi($this);
    }

    public function returns(): ReturnsApi
    {
        return new ReturnsApi($this);
    }

    public function shipments(): ShipmentsApi
    {
        return new ShipmentsApi($this);
    }

    public function offerMappings(): OfferMappingsApi
    {
        return new OfferMappingsApi($this);
    }

    public function offers(): OffersApi
    {
        return new OffersApi($this);
    }

    public function stocks(): StocksApi
    {
        return new StocksApi($this);
    }

    public function prices(): PricesApi
    {
        return new PricesApi($this);
    }

    public function warehouses(): WarehousesApi
    {
        return new WarehousesApi($this);
    }

    public function bids(): BidsApi
    {
        return new BidsApi($this);
    }

    public function promos(): PromosApi
    {
        return new PromosApi($this);
    }

    public function categories(): CategoriesApi
    {
        return new CategoriesApi($this);
    }

    public function content(): ContentApi
    {
        return new ContentApi($this);
    }

    public function deliveryOptions(): DeliveryOptionsApi
    {
        return new DeliveryOptionsApi($this);
    }

    public function auth(): AuthApi
    {
        return new AuthApi($this);
    }

    public function businesses(): BusinessesApi
    {
        return new BusinessesApi($this);
    }

    public function campaigns(): CampaignsApi
    {
        return new CampaignsApi($this);
    }

    public function chats(): ChatsApi
    {
        return new ChatsApi($this);
    }

    public function goodsFeedback(): GoodsFeedbackApi
    {
        return new GoodsFeedbackApi($this);
    }

    public function goodsQuestions(): GoodsQuestionsApi
    {
        return new GoodsQuestionsApi($this);
    }

    public function outlets(): OutletsApi
    {
        return new OutletsApi($this);
    }

    public function outletLicenses(): OutletLicensesApi
    {
        return new OutletLicensesApi($this);
    }

    public function regions(): RegionsApi
    {
        return new RegionsApi($this);
    }

    public function reports(): ReportsApi
    {
        return new ReportsApi($this);
    }

    public function ratings(): RatingsApi
    {
        return new RatingsApi($this);
    }

    public function deliveryServices(): DeliveryServicesApi
    {
        return new DeliveryServicesApi($this);
    }

    public function ordersStats(): OrdersStatsApi
    {
        return new OrdersStatsApi($this);
    }

    public function goodsStats(): GoodsStatsApi
    {
        return new GoodsStatsApi($this);
    }

    public function logisticPoints(): LogisticPointsApi
    {
        return new LogisticPointsApi($this);
    }

    public function operations(): OperationsApi
    {
        return new OperationsApi($this);
    }

    public function tariffs(): TariffsApi
    {
        return new TariffsApi($this);
    }

    public function v1(string $section = ''): YandexMarketApiVersion
    {
        return $this->version('v1', $section);
    }

    public function v2(string $section = ''): YandexMarketApiVersion
    {
        return $this->version('v2', $section);
    }

    public function version(string $version, string $section = ''): YandexMarketApiVersion
    {
        return new YandexMarketApiVersion($this, $version, $section);
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function request(string $path, array $payload = [], string $method = 'POST', array $query = []): YandexMarketApiResponse
    {
        $method   = strtoupper($method);
        $url      = $this->buildUrl($path, $query);
        $dtoClass = YandexMarketResponseDtoMap::resolve($method, $path);

        $authValue = $this->authorizationScheme !== ''
            ? $this->authorizationScheme . ' ' . $this->token
            : $this->token;

        $request = $this->requestFactory
            ->createRequest($method, $url)
            ->withHeader($this->authHeader, $authValue)
            ->withHeader('Accept', 'application/json')
            ->withHeader('Content-Type', 'application/json');

        $hasBody     = $payload !== [] || !in_array($method, ['GET', 'HEAD', 'DELETE'], true);
        $requestBody = null;

        if ($hasBody) {
            $requestBody = json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            if ($requestBody === false) {
                throw new YandexMarketException('Failed to encode Yandex Market request.');
            }

            $request = $request->withBody($this->streamFactory->createStream($requestBody));
        }

        $response = $this->sendWithRateLimitRetry($request, $requestBody);
        $status   = $response->getStatusCode();
        $raw      = (string) $response->getBody();

        if ($raw === '') {
            if ($status >= 400) {
                throw new YandexMarketException('Yandex Market API error.', $status);
            }

            return new YandexMarketApiResponse(defaultDtoClass: $dtoClass);
        }

        try {
            $decoded = json_decode($raw, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException) {
            if ($status >= 400) {
                throw new YandexMarketException('Yandex Market API error.', $status, ['body' => $raw]);
            }

            return new YandexMarketApiResponse([
                'body' => $raw,
            ], $dtoClass);
        }

        if (!is_array($decoded)) {
            if ($status >= 400) {
                throw new YandexMarketException('Yandex Market API error.', $status, ['body' => $raw]);
            }

            return new YandexMarketApiResponse([
                'body' => $raw,
            ], $dtoClass);
        }

        if ($status >= 400) {
            throw new YandexMarketException($this->resolveErrorMessage($decoded), $status, $decoded);
        }

        return new YandexMarketApiResponse($decoded, $dtoClass);
    }

    private function sendWithRateLimitRetry(RequestInterface $request, ?string $requestBody): ResponseInterface
    {
        $retryAllowed = $this->rateLimitRequestPolicy->allows($request);

        for ($attempt = 1; $attempt <= $this->rateLimitMaxAttempts; $attempt++) {
            $attemptRequest = $requestBody === null
                ? $request
                : $request->withBody($this->streamFactory->createStream($requestBody));

            $response = $this->httpClient->sendRequest($attemptRequest);
            $status   = $response->getStatusCode();

            if (
                !in_array($status, [420, 429], true)
                || !$retryAllowed
                || $attempt >= $this->rateLimitMaxAttempts
            ) {
                return $response;
            }

            $fallbackDelay = (float) (2 ** ($attempt - 1));
            $providerDelay = $this->resolveProviderRetryDelay($response);
            $delay         = $providerDelay === null ? $fallbackDelay : max($fallbackDelay, $providerDelay);

            $response->getBody()->close();

            if ($this->onRateLimitRetry !== null) {
                ($this->onRateLimitRetry)(new YandexMarketRetryEvent(
                    attempt: $attempt + 1,
                    delaySeconds: $delay,
                    method: $request->getMethod(),
                    endpoint: $request->getUri()->getPath(),
                    statusCode: $status,
                ));
            }

            $this->rateLimitSleeper->sleep($delay);
        }

        throw new YandexMarketException('Yandex Market retry loop ended unexpectedly.');
    }

    private function resolveProviderRetryDelay(ResponseInterface $response): ?float
    {
        $delays = [
            $this->parseRetryAfter($response->getHeaderLine('Retry-After')),
            $this->parseNumericDelay($response->getHeaderLine('X-RateLimit-Retry')),
            $this->parseAbsoluteDelay($response->getHeaderLine('X-RateLimit-Resource-Until')),
        ];

        $resolved = null;
        foreach ($delays as $delay) {
            if ($delay !== null) {
                $resolved = $resolved === null ? $delay : max($resolved, $delay);
            }
        }

        return $resolved;
    }

    private function parseRetryAfter(string $value): ?float
    {
        $numeric = $this->parseNumericDelay($value);
        if ($numeric !== null || trim($value) === '') {
            return $numeric;
        }

        return $this->parseAbsoluteDelay($value);
    }

    private function parseNumericDelay(string $value): ?float
    {
        $value = trim($value);
        if ($value === '' || !is_numeric($value)) {
            return null;
        }

        $delay = (float) $value;

        return $delay >= 0 && is_finite($delay) ? $delay : null;
    }

    private function parseAbsoluteDelay(string $value): ?float
    {
        $value = trim($value);
        if ($value === '') {
            return null;
        }

        $timestamp = strtotime($value);
        if ($timestamp === false) {
            return null;
        }

        return (float) max(0, $timestamp - time());
    }

    /**
     * @param array<string, mixed> $payload
     */
    private function resolveErrorMessage(array $payload): string
    {
        $message = $payload['message'] ?? null;
        if (is_string($message) && trim($message) !== '') {
            return trim($message);
        }

        $error = $payload['error'] ?? null;
        if (is_string($error) && trim($error) !== '') {
            return trim($error);
        }

        $errors = $payload['errors'] ?? null;
        if (is_array($errors) && $errors !== []) {
            $first = $errors[array_key_first($errors)] ?? null;
            if (is_array($first)) {
                $firstMessage = $first['message'] ?? null;
                if (is_string($firstMessage) && trim($firstMessage) !== '') {
                    return trim($firstMessage);
                }
            }
        }

        return 'Yandex Market API error.';
    }

    /**
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     */
    private function buildUrl(string $path, array $query = []): string
    {
        $url = $this->baseUrl . '/' . ltrim($path, '/');
        if ($query === []) {
            return $url;
        }

        return $url . '?' . http_build_query($query, '', '&', PHP_QUERY_RFC3986);
    }
}
