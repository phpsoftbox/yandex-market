<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class ReturnsApi extends YandexMarketApiSection
{
    /**
     * Доступные решения по возврату.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getReturnAvailableDecisions(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v1/businesses/{businessId}/returns/decisions', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Отмена возврата.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function cancelReturn(string|int $campaignId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v1/campaigns/{campaignId}/returns/cancel', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Создание возврата.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function createReturn(string|int $campaignId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v1/campaigns/{campaignId}/returns/create', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Информация о возврате.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getReturn(string|int $campaignId, string|int $orderId, string|int $returnId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId}', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
            'returnId'   => $returnId,
        ]);

        return $this->client->get($path, $query);
    }

    /**
     * Заявление на возврат.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getReturnApplication(string|int $campaignId, string|int $orderId, string|int $returnId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
            'returnId'   => $returnId,
        ]);

        return $this->client->get($path, $query);
    }

    /**
     * Решение по возврату.
     *
     * @deprecated API помечен deprecated в OpenAPI.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function setReturnDecision(string|int $campaignId, string|int $orderId, string|int $returnId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
            'returnId'   => $returnId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Отправить решение по возврату.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function submitReturnDecision(string|int $campaignId, string|int $orderId, string|int $returnId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/submit', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
            'returnId'   => $returnId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Получить фото по возврату.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getReturnPhoto(
        string|int $campaignId,
        string|int $orderId,
        string|int $returnId,
        string|int $itemId,
        string|int $imageHash,
        array $query = [],
    ): YandexMarketApiResponse {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash}', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
            'returnId'   => $returnId,
            'itemId'     => $itemId,
            'imageHash'  => $imageHash,
        ]);

        return $this->client->get($path, $query);
    }

    /**
     * Список возвратов.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getReturns(string|int $campaignId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/returns', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->get($path, $query);
    }
}
