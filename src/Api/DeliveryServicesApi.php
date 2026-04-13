<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class DeliveryServicesApi extends YandexMarketApiSection
{
    public function getDeliveryServices(array $query = []): YandexMarketApiResponse
    {
        return $this->client->get('/v2/delivery/services', $query);
    }
}
