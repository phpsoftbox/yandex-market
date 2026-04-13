<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class GoodsStatsApi extends YandexMarketApiSection
{
    public function getGoodsStats(string|int $campaignId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/stats/skus', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->post($path, $payload, $query);
    }
}
