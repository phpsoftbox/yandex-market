<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Tests\Api;

use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\YandexMarket\Tests\Support\CreatesYandexMarketClient;
use PHPUnit\Framework\TestCase;

final class YandexMarketReturnsApiTest extends TestCase
{
    use CreatesYandexMarketClient;

    public function testGetReturnPhotoResolvesAllPathParameters(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $client->returns()->getReturnPhoto(1, 2, 3, 4, 'img/hash');

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('GET', $request->getMethod());
        self::assertStringContainsString('/v2/campaigns/1/orders/2/returns/3/decision/4/image/img%2Fhash', (string) $request->getUri());
    }

    public function testSubmitReturnDecisionUsesPostMethod(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"status":"ok"}'));

        $client->returns()->submitReturnDecision(10, 20, 30, [
            'result' => 'APPROVED',
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('POST', $request->getMethod());
        self::assertStringContainsString('/v2/campaigns/10/orders/20/returns/30/decision/submit', (string) $request->getUri());
        self::assertStringContainsString('"result":"APPROVED"', (string) $request->getBody());
    }
}
