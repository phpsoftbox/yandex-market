<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class DeliveryOptionsApi extends YandexMarketApiSection
{
    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getDeliveryOptions(string|int $campaignId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v1/campaigns/{campaignId}/delivery-options', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getReturnDeliveryOptions(string|int $campaignId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v1/campaigns/{campaignId}/return-delivery-options', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->post($path, $payload, $query);
    }
}
