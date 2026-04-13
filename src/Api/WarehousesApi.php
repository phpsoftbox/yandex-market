<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class WarehousesApi extends YandexMarketApiSection
{
    /**
     * @deprecated API помечен deprecated в OpenAPI.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getWarehouses(string|int $businessId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/warehouses', [
            'businessId' => $businessId,
        ]);

        return $this->client->get($path, $query);
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getPagedWarehouses(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/warehouses', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function updateWarehouseStatus(string|int $campaignId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/warehouse/status', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getFulfillmentWarehouses(array $query = []): YandexMarketApiResponse
    {
        return $this->client->get('/v2/warehouses', $query);
    }
}
