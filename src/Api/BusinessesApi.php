<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class BusinessesApi extends YandexMarketApiSection
{
    public function getBusinessSettings(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/settings', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }
}
