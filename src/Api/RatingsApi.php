<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class RatingsApi extends YandexMarketApiSection
{
    public function getQualityRatings(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/ratings/quality', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    public function getQualityRatingDetails(string|int $campaignId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/ratings/quality/details', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->post($path, $payload, $query);
    }
}
