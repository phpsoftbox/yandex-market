<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class RegionsApi extends YandexMarketApiSection
{
    public function searchRegionsByName(array $query = []): YandexMarketApiResponse
    {
        return $this->client->get('/v2/regions', $query);
    }

    public function getRegionsCodes(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/regions/countries', $payload, $query);
    }

    public function searchRegionsById(string|int $regionId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/regions/{regionId}', [
            'regionId' => $regionId,
        ]);

        return $this->client->get($path, $query);
    }

    public function searchRegionChildren(string|int $regionId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/regions/{regionId}/children', [
            'regionId' => $regionId,
        ]);

        return $this->client->get($path, $query);
    }
}
