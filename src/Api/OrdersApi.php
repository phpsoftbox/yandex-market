<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class OrdersApi extends YandexMarketApiSection
{
    /**
     * Список заказов в бизнесе.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getBusinessOrders(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v1/businesses/{businessId}/orders', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Создание заказа.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function createOrder(string|int $campaignId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v1/campaigns/{campaignId}/orders/create', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Обновление заказа.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function updateOrder(string|int $campaignId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v1/campaigns/{campaignId}/orders/update', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Доступные обновления заказа.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getOrderUpdateOptions(string|int $campaignId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v1/campaigns/{campaignId}/orders/update-options', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Информация о заказах в магазине.
     *
     * @deprecated API помечен deprecated в OpenAPI.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getOrders(string|int $campaignId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->get($path, $query);
    }

    /**
     * Массовое обновление статусов заказов.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function updateOrderStatuses(string|int $campaignId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/status-update', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Информация по заказу.
     *
     * @deprecated API помечен deprecated в OpenAPI.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getOrder(string|int $campaignId, string|int $orderId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
        ]);

        return $this->client->get($path, $query);
    }

    /**
     * Установка состава коробок заказа.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function setOrderBoxLayout(string|int $campaignId, string|int $orderId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/boxes', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
        ]);

        return $this->client->put($path, $payload, $query);
    }

    /**
     * Данные о бизнес-покупателе.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getOrderBusinessBuyerInfo(string|int $campaignId, string|int $orderId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/business-buyer', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Данные покупателя.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getOrderBuyerInfo(string|int $campaignId, string|int $orderId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/buyer', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
        ]);

        return $this->client->get($path, $query);
    }

    /**
     * Подтвердить отмену заказа.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function acceptOrderCancellation(string|int $campaignId, string|int $orderId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/cancellation/accept', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
        ]);

        return $this->client->put($path, $payload, $query);
    }

    /**
     * Передать цифровые коды товара.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function provideOrderDigitalCodes(string|int $campaignId, string|int $orderId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/deliverDigitalGoods', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Установить дату доставки заказа.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function setOrderDeliveryDate(string|int $campaignId, string|int $orderId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/delivery/date', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
        ]);

        return $this->client->put($path, $payload, $query);
    }

    /**
     * Сгенерировать ярлыки заказа.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function generateOrderLabels(string|int $campaignId, string|int $orderId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/delivery/labels', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
        ]);

        return $this->client->get($path, $query);
    }

    /**
     * Получить данные ярлыков заказа.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getOrderLabelsData(string|int $campaignId, string|int $orderId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/delivery/labels/data', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
        ]);

        return $this->client->get($path, $query);
    }

    /**
     * Установить коробки в отгрузке заказа.
     *
     * @deprecated API помечен deprecated в OpenAPI.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function setOrderShipmentBoxes(string|int $campaignId, string|int $orderId, string|int $shipmentId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
            'shipmentId' => $shipmentId,
        ]);

        return $this->client->put($path, $payload, $query);
    }

    /**
     * Сгенерировать ярлык коробки.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function generateOrderLabel(string|int $campaignId, string|int $orderId, string|int $shipmentId, string|int $boxId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
            'shipmentId' => $shipmentId,
            'boxId'      => $boxId,
        ]);

        return $this->client->get($path, $query);
    }

    /**
     * Обновить срок хранения заказа.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function updateOrderStorageLimit(string|int $campaignId, string|int $orderId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/delivery/storage-limit', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
        ]);

        return $this->client->put($path, $payload, $query);
    }

    /**
     * Установить трек-код доставки.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function setOrderDeliveryTrackCode(string|int $campaignId, string|int $orderId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/delivery/track', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Получить бизнес-документы заказа.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getOrderBusinessDocumentsInfo(string|int $campaignId, string|int $orderId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/documents', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Обновить внешний идентификатор заказа.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function updateExternalOrderId(string|int $campaignId, string|int $orderId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/external-id', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Передать идентификаторы товаров заказа.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function provideOrderItemIdentifiers(string|int $campaignId, string|int $orderId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/identifiers', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
        ]);

        return $this->client->put($path, $payload, $query);
    }

    /**
     * Статусы обработки идентификаторов заказа.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getOrderIdentifiersStatus(string|int $campaignId, string|int $orderId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/identifiers/status', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Обновить товары в заказе.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function updateOrderItems(string|int $campaignId, string|int $orderId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/items', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
        ]);

        return $this->client->put($path, $payload, $query);
    }

    /**
     * Обновить статус заказа.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function updateOrderStatus(string|int $campaignId, string|int $orderId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/status', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
        ]);

        return $this->client->put($path, $payload, $query);
    }

    /**
     * Подтвердить ЕАС для заказа.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function verifyOrderEac(string|int $campaignId, string|int $orderId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/orders/{orderId}/verifyEac', [
            'campaignId' => $campaignId,
            'orderId'    => $orderId,
        ]);

        return $this->client->put($path, $payload, $query);
    }
}
