<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Tests\Support;

use PhpSoftBox\Http\Message\RequestFactory;
use PhpSoftBox\Http\Message\StreamFactory;
use PhpSoftBox\YandexMarket\Retry\RateLimitRetryOptions;
use PhpSoftBox\YandexMarket\YandexMarketApiClient;
use Psr\Http\Message\ResponseInterface;

trait CreatesYandexMarketClient
{
    /**
     * @return array{0: YandexMarketApiClient, 1: FakeHttpClient}
     */
    private function createClient(
        ResponseInterface|array $response,
        ?RateLimitRetryOptions $rateLimitRetry = null,
        bool $consumeRequestBodies = false,
    ): array {
        $httpClient = new FakeHttpClient($response, $consumeRequestBodies);

        $client = new YandexMarketApiClient(
            token: 'ym-token',
            httpClient: $httpClient,
            requestFactory: new RequestFactory(),
            streamFactory: new StreamFactory(),
            rateLimitRetry: $rateLimitRetry,
        );

        return [$client, $httpClient];
    }
}
