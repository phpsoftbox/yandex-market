<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class CampaignsApi extends YandexMarketApiSection
{
    public function getCampaigns(array $query = []): YandexMarketApiResponse
    {
        return $this->client->get('/v2/campaigns', $query);
    }

    public function getCampaign(string|int $campaignId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->get($path, $query);
    }

    public function getCampaignSettings(string|int $campaignId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/settings', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->get($path, $query);
    }
}
