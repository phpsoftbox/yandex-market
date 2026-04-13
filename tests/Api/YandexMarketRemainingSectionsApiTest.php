<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Tests\Api;

use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\YandexMarket\Tests\Support\CreatesYandexMarketClient;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class YandexMarketRemainingSectionsApiTest extends TestCase
{
    use CreatesYandexMarketClient;

    /**
     * @param callable(object): mixed $call
     */
    #[DataProvider('sectionCallsProvider')]
    public function testSectionMethodsBuildExpectedRequest(callable $call, string $expectedMethod, string $expectedPath): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $call($client);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame($expectedMethod, $request->getMethod());
        self::assertStringContainsString($expectedPath, (string) $request->getUri());
    }

    /**
     * @return iterable<string, array{0: callable(object): mixed, 1: string, 2: string}>
     */
    public static function sectionCallsProvider(): iterable
    {
        yield 'auth' => [
            static fn (object $client): mixed => $client->auth()->getAuthTokenInfo(['token' => 'x']),
            'POST',
            '/v2/auth/token',
        ];

        yield 'businesses' => [
            static fn (object $client): mixed => $client->businesses()->getBusinessSettings(101, ['scope' => 'all']),
            'POST',
            '/v2/businesses/101/settings',
        ];

        yield 'campaigns' => [
            static fn (object $client): mixed => $client->campaigns()->getCampaignSettings(102),
            'GET',
            '/v2/campaigns/102/settings',
        ];

        yield 'chats' => [
            static fn (object $client): mixed => $client->chats()->sendMessageToChat(103, ['message' => 'hello']),
            'POST',
            '/v2/businesses/103/chats/message',
        ];

        yield 'goods feedback' => [
            static fn (object $client): mixed => $client->goodsFeedback()->updateGoodsFeedbackComment(104, ['text' => 'ok']),
            'POST',
            '/v2/businesses/104/goods-feedback/comments/update',
        ];

        yield 'goods questions' => [
            static fn (object $client): mixed => $client->goodsQuestions()->getGoodsQuestionAnswers(105, ['limit' => 10]),
            'POST',
            '/v1/businesses/105/goods-questions/answers',
        ];

        yield 'outlets' => [
            static fn (object $client): mixed => $client->outlets()->updateOutlet(106, 1, ['status' => 'ACTIVE']),
            'PUT',
            '/v2/campaigns/106/outlets/1',
        ];

        yield 'outlet licenses' => [
            static fn (object $client): mixed => $client->outletLicenses()->getOutletLicenses(107),
            'GET',
            '/v2/campaigns/107/outlets/licenses',
        ];

        yield 'regions' => [
            static fn (object $client): mixed => $client->regions()->searchRegionChildren(108),
            'GET',
            '/v2/regions/108/children',
        ];

        yield 'reports' => [
            static fn (object $client): mixed => $client->reports()->getReportInfo(109),
            'GET',
            '/v2/reports/info/109',
        ];

        yield 'ratings' => [
            static fn (object $client): mixed => $client->ratings()->getQualityRatingDetails(110, ['dateFrom' => '2026-04-01']),
            'POST',
            '/v2/campaigns/110/ratings/quality/details',
        ];

        yield 'delivery services' => [
            static fn (object $client): mixed => $client->deliveryServices()->getDeliveryServices(),
            'GET',
            '/v2/delivery/services',
        ];

        yield 'orders stats' => [
            static fn (object $client): mixed => $client->ordersStats()->getOrdersStats(111, ['dateFrom' => '2026-04-01']),
            'POST',
            '/v2/campaigns/111/stats/orders',
        ];

        yield 'goods stats' => [
            static fn (object $client): mixed => $client->goodsStats()->getGoodsStats(112, ['dateFrom' => '2026-04-01']),
            'POST',
            '/v2/campaigns/112/stats/skus',
        ];

        yield 'logistic points' => [
            static fn (object $client): mixed => $client->logisticPoints()->getLogisticPoints(113, ['limit' => 20]),
            'POST',
            '/v1/businesses/113/logistics-points',
        ];

        yield 'operations' => [
            static fn (object $client): mixed => $client->operations()->getOperations(114, ['page' => 1]),
            'POST',
            '/v1/businesses/114/operations',
        ];

        yield 'tariffs' => [
            static fn (object $client): mixed => $client->tariffs()->calculateTariffs(['items' => []]),
            'POST',
            '/v2/tariffs/calculate',
        ];
    }
}
