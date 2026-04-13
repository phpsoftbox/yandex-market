<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class OutletLicensesApi extends YandexMarketApiSection
{
    public function deleteOutletLicenses(string|int $campaignId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/outlets/licenses', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->delete($path, $payload, $query);
    }

    public function getOutletLicenses(string|int $campaignId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/outlets/licenses', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->get($path, $query);
    }

    public function updateOutletLicenses(string|int $campaignId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/outlets/licenses', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->post($path, $payload, $query);
    }
}
