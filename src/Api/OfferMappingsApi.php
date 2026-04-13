<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class OfferMappingsApi extends YandexMarketApiSection
{
    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function generateOfferBarcodes(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v1/businesses/{businessId}/offer-mappings/barcodes/generate', [
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
    public function getOfferMappings(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/offer-mappings', [
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
    public function addOffersToArchive(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/offer-mappings/archive', [
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
    public function deleteOffers(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/offer-mappings/delete', [
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
    public function deleteOffersFromArchive(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/offer-mappings/unarchive', [
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
    public function updateOfferMappings(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/offer-mappings/update', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }
}
