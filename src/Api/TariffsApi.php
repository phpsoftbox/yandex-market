<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class TariffsApi extends YandexMarketApiSection
{
    public function calculateTariffs(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/tariffs/calculate', $payload, $query);
    }
}
