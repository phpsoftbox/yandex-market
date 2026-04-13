<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class LogisticPointsApi extends YandexMarketApiSection
{
    public function getLogisticPoints(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v1/businesses/{businessId}/logistics-points', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }
}
