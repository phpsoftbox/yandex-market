<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Tests;

use PhpSoftBox\Collection\Collection;
use PhpSoftBox\Http\Message\RequestFactory;
use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\Http\Message\StreamFactory;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\GetCampaignsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\GetOrdersResponse;
use PhpSoftBox\YandexMarket\Dto\YandexMarketEmptyDto;
use PhpSoftBox\YandexMarket\Tests\Support\CreatesYandexMarketClient;
use PhpSoftBox\YandexMarket\Tests\Support\FakeHttpClient;
use PhpSoftBox\YandexMarket\YandexMarketApiClient;
use PhpSoftBox\YandexMarket\YandexMarketApiResponse;
use PhpSoftBox\YandexMarket\YandexMarketException;
use PHPUnit\Framework\TestCase;

final class YandexMarketApiClientHttpTest extends TestCase
{
    use CreatesYandexMarketClient;

    /**
     * Проверяет, что POST-запрос отправляет Api-Key и JSON-тело.
     */
    public function testPostSendsApiKeyAndPayload(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"orders":[]}}'));

        $result = $client->post('/v2/campaigns/1/orders', [
            'limit' => 50,
        ]);

        self::assertInstanceOf(Collection::class, $result);
        self::assertSame(['orders' => []], $result->get('result'));

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('ym-token', $request->getHeaderLine('Api-Key'));
        self::assertStringContainsString('/v2/campaigns/1/orders', (string) $request->getUri());
        self::assertStringContainsString('"limit":50', (string) $request->getBody());
    }

    /**
     * Проверяет, что response остается Collection-совместимым и может явно создать DTO.
     */
    public function testResponseCanMakeExplicitDto(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{"orders":[]}}'));

        $response = $client->post('/v2/campaigns/1/orders');

        self::assertInstanceOf(Collection::class, $response);
        self::assertInstanceOf(YandexMarketApiResponse::class, $response);

        $dto = $response->makeDto(YandexMarketEmptyDto::class);

        self::assertInstanceOf(YandexMarketEmptyDto::class, $dto);
        self::assertSame(['result' => ['orders' => []]], $dto->extra);
    }

    /**
     * Проверяет, что сгенерированный API wrapper возвращает YandexMarketApiResponse.
     */
    public function testApiWrapperReturnsYandexMarketApiResponse(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"orders":[]}'));

        $response = $client->orders()->getOrders(123);

        self::assertInstanceOf(Collection::class, $response);
        self::assertInstanceOf(YandexMarketApiResponse::class, $response);

        $dto = $response->makeDto();

        self::assertInstanceOf(GetOrdersResponse::class, $dto);
        self::assertSame([], $dto->orders);
    }

    /**
     * Проверяет, что mapped endpoint campaigns.getCampaigns создает DTO без явного класса.
     */
    public function testGetCampaignsCanMakeMappedDto(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"campaigns":[{"id":123,"domain":"shop.test"}],"pager":{"total":1}}'));

        $response = $client->campaigns()->getCampaigns();
        $dto      = $response->makeDto();

        self::assertInstanceOf(GetCampaignsResponse::class, $dto);
        self::assertCount(1, $dto->campaigns);
        self::assertSame('shop.test', $dto->campaigns[0]->domain);
        self::assertNotNull($dto->pager);
        self::assertSame(1, $dto->pager->total);
    }

    /**
     * Проверяет, что можно использовать OAuth Bearer вместо Api-Key.
     */
    public function testAuthorizationHeaderCanBeConfigured(): void
    {
        $httpClient = new FakeHttpClient(new Response(200, [], '{"result":{}}'));

        $client = new YandexMarketApiClient(
            token: 'oauth-token',
            httpClient: $httpClient,
            requestFactory: new RequestFactory(),
            streamFactory: new StreamFactory(),
            authHeader: 'Authorization',
            authorizationScheme: 'Bearer',
        );

        $client->get('/v2/campaigns');

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('Bearer oauth-token', $request->getHeaderLine('Authorization'));
    }

    /**
     * Проверяет, что helper v2(section) корректно собирает путь.
     */
    public function testVersionedHelperBuildsExpectedPath(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $client->v2('campaigns/123')->get('/orders', [
            'limit' => 20,
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/campaigns/123/orders', (string) $request->getUri());
        self::assertStringContainsString('limit=20', (string) $request->getUri());
    }

    /**
     * Проверяет, что ошибка API поднимает YandexMarketException с сообщением.
     */
    public function testErrorResponseThrowsException(): void
    {
        [$client] = $this->createClient(new Response(401, [], '{"message":"Unauthorized"}'));

        $this->expectException(YandexMarketException::class);
        $this->expectExceptionMessage('Unauthorized');

        $client->post('/v2/campaigns');
    }
}
