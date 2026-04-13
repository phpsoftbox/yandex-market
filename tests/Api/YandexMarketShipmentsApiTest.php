<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Tests\Api;

use PhpSoftBox\Collection\Collection;
use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\YandexMarket\Tests\Support\CreatesYandexMarketClient;
use PHPUnit\Framework\TestCase;

final class YandexMarketShipmentsApiTest extends TestCase
{
    use CreatesYandexMarketClient;

    public function testConfirmShipmentUsesPostWithPayload(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));

        $client->shipments()->confirmShipment(7, 42, [
            'shipmentDate' => '2026-04-13',
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('POST', $request->getMethod());
        self::assertStringContainsString('/v2/campaigns/7/first-mile/shipments/42/confirm', (string) $request->getUri());
        self::assertStringContainsString('"shipmentDate":"2026-04-13"', (string) $request->getBody());
    }

    public function testReceptionTransferActUsesQueryParameters(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $client->shipments()->downloadShipmentReceptionTransferAct(99, [
            'warehouse_id' => 555,
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('GET', $request->getMethod());
        self::assertStringContainsString('/v2/campaigns/99/shipments/reception-transfer-act', (string) $request->getUri());
        self::assertStringContainsString('warehouse_id=555', (string) $request->getUri());
    }

    public function testBinaryShipmentResponseReturnsRawBodyCollection(): void
    {
        [$client] = $this->createClient(new Response(200, ['Content-Type' => 'application/pdf'], '%PDF-1.4'));

        $result = $client->shipments()->downloadShipmentAct(77, 88);

        self::assertInstanceOf(Collection::class, $result);
        self::assertSame('%PDF-1.4', $result->get('body'));
    }
}
