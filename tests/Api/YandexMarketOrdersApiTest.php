<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Tests\Api;

use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\YandexMarket\Tests\Support\CreatesYandexMarketClient;
use PHPUnit\Framework\TestCase;

final class YandexMarketOrdersApiTest extends TestCase
{
    use CreatesYandexMarketClient;

    public function testGetOrderBuyerInfoBuildsExpectedGetRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $client->orders()->getOrderBuyerInfo(123, 456, [
            'limit' => 10,
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('GET', $request->getMethod());
        self::assertStringContainsString('/v2/campaigns/123/orders/456/buyer', (string) $request->getUri());
        self::assertStringContainsString('limit=10', (string) $request->getUri());
    }

    public function testUpdateOrderStatusUsesPutAndPayload(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));

        $client->orders()->updateOrderStatus(12, 34, [
            'status' => 'PROCESSING',
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('PUT', $request->getMethod());
        self::assertStringContainsString('/v2/campaigns/12/orders/34/status', (string) $request->getUri());
        self::assertStringContainsString('"status":"PROCESSING"', (string) $request->getBody());
    }

    public function testDeprecatedGetOrdersStillAvailable(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"orders":[]}'));

        $client->orders()->getOrders(77, [
            'status' => 'PROCESSING',
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('GET', $request->getMethod());
        self::assertStringContainsString('/v2/campaigns/77/orders', (string) $request->getUri());
    }
}
