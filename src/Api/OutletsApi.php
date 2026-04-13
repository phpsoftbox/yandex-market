<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class OutletsApi extends YandexMarketApiSection
{
    public function getOutlets(string|int $campaignId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/outlets', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->get($path, $query);
    }

    public function createOutlet(string|int $campaignId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/outlets', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    public function deleteOutlet(string|int $campaignId, string|int $outletId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/outlets/{outletId}', [
            'campaignId' => $campaignId,
            'outletId'   => $outletId,
        ]);

        return $this->client->delete($path, $payload, $query);
    }

    public function getOutlet(string|int $campaignId, string|int $outletId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/outlets/{outletId}', [
            'campaignId' => $campaignId,
            'outletId'   => $outletId,
        ]);

        return $this->client->get($path, $query);
    }

    public function updateOutlet(string|int $campaignId, string|int $outletId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/outlets/{outletId}', [
            'campaignId' => $campaignId,
            'outletId'   => $outletId,
        ]);

        return $this->client->put($path, $payload, $query);
    }
}
