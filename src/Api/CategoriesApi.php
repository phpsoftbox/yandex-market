<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class CategoriesApi extends YandexMarketApiSection
{
    /**
     * @deprecated API помечен deprecated в OpenAPI.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getCategoriesMaxSaleQuantum(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/categories/max-sale-quantum', $payload, $query);
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getCategoriesTree(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/categories/tree', $payload, $query);
    }
}
