<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class ContentApi extends YandexMarketApiSection
{
    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getOfferCardsContentStatus(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/offer-cards', [
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
    public function updateOfferContent(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/offer-cards/update', [
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
    public function getCategoryContentParameters(string|int $categoryId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/category/{categoryId}/parameters', [
            'categoryId' => $categoryId,
        ]);

        return $this->client->post($path, $payload, $query);
    }
}
