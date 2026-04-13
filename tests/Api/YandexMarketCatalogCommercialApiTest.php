<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Tests\Api;

use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\YandexMarket\Tests\Support\CreatesYandexMarketClient;
use PHPUnit\Framework\TestCase;

final class YandexMarketCatalogCommercialApiTest extends TestCase
{
    use CreatesYandexMarketClient;

    public function testOfferMappingsBuildsBusinessPath(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $client->offerMappings()->getOfferMappings(15, [
            'offerIds' => ['A-1'],
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('POST', $request->getMethod());
        self::assertStringContainsString('/v2/businesses/15/offer-mappings', (string) $request->getUri());
    }

    public function testOffersHiddenUsesGetMethod(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"hiddenOffers":[]}'));

        $client->offers()->getHiddenOffers(77, [
            'page_token' => 'abc',
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('GET', $request->getMethod());
        self::assertStringContainsString('/v2/campaigns/77/hidden-offers', (string) $request->getUri());
    }

    public function testStocksUpdateUsesPutMethod(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"status":"ok"}'));

        $client->stocks()->updateStocks(9, [
            'skus' => [],
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('PUT', $request->getMethod());
        self::assertStringContainsString('/v2/campaigns/9/offers/stocks', (string) $request->getUri());
    }

    public function testPricesDeprecatedGetPricesStillAvailable(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"offers":[]}'));

        $client->prices()->getPrices(123);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('GET', $request->getMethod());
        self::assertStringContainsString('/v2/campaigns/123/offer-prices', (string) $request->getUri());
    }

    public function testWarehousesFulfillmentUsesGlobalEndpoint(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":[]}'));

        $client->warehouses()->getFulfillmentWarehouses();

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('GET', $request->getMethod());
        self::assertStringContainsString('/v2/warehouses', (string) $request->getUri());
    }

    public function testBidsUsesPutForBusinessEndpoint(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"status":"ok"}'));

        $client->bids()->putBidsForBusiness(321, [
            'bids' => [],
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('PUT', $request->getMethod());
        self::assertStringContainsString('/v2/businesses/321/bids', (string) $request->getUri());
    }

    public function testPromosUpdateOffersEndpoint(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $client->promos()->updatePromoOffers(111, [
            'promos' => [],
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('POST', $request->getMethod());
        self::assertStringContainsString('/v2/businesses/111/promos/offers/update', (string) $request->getUri());
    }

    public function testCategoriesMethodUsesStaticPath(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $client->categories()->getCategoriesTree([
            'language' => 'RU',
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('POST', $request->getMethod());
        self::assertStringContainsString('/v2/categories/tree', (string) $request->getUri());
    }

    public function testContentCategoryParametersResolvesPath(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $client->content()->getCategoryContentParameters(4567, [
            'businessId' => 12,
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('POST', $request->getMethod());
        self::assertStringContainsString('/v2/category/4567/parameters', (string) $request->getUri());
    }

    public function testDeliveryOptionsEndpointUsesV1CampaignPath(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $client->deliveryOptions()->getReturnDeliveryOptions(15, [
            'regionId' => 213,
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('POST', $request->getMethod());
        self::assertStringContainsString('/v1/campaigns/15/return-delivery-options', (string) $request->getUri());
    }
}
