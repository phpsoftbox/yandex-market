<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class AuthApi extends YandexMarketApiSection
{
    public function getAuthTokenInfo(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/auth/token', $payload, $query);
    }
}
