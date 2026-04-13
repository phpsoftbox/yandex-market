<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class ShipmentsApi extends YandexMarketApiSection
{
    /**
     * Поиск отгрузок.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function searchShipments(string|int $campaignId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/first-mile/shipments', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->put($path, $payload, $query);
    }

    /**
     * Информация по отгрузке.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getShipment(string|int $campaignId, string|int $shipmentId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}', [
            'campaignId' => $campaignId,
            'shipmentId' => $shipmentId,
        ]);

        return $this->client->get($path, $query);
    }

    /**
     * Получить акт приема-передачи отгрузки.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function downloadShipmentAct(string|int $campaignId, string|int $shipmentId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}/act', [
            'campaignId' => $campaignId,
            'shipmentId' => $shipmentId,
        ]);

        return $this->client->get($path, $query);
    }

    /**
     * Подтвердить отгрузку.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function confirmShipment(string|int $campaignId, string|int $shipmentId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}/confirm', [
            'campaignId' => $campaignId,
            'shipmentId' => $shipmentId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Получить акт расхождений.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function downloadShipmentDiscrepancyAct(string|int $campaignId, string|int $shipmentId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}/discrepancy-act', [
            'campaignId' => $campaignId,
            'shipmentId' => $shipmentId,
        ]);

        return $this->client->get($path, $query);
    }

    /**
     * Получить фактический акт приема-передачи.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function downloadShipmentInboundAct(string|int $campaignId, string|int $shipmentId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}/inbound-act', [
            'campaignId' => $campaignId,
            'shipmentId' => $shipmentId,
        ]);

        return $this->client->get($path, $query);
    }

    /**
     * Получить состав заказов в отгрузке.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getShipmentOrdersInfo(string|int $campaignId, string|int $shipmentId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}/orders/info', [
            'campaignId' => $campaignId,
            'shipmentId' => $shipmentId,
        ]);

        return $this->client->get($path, $query);
    }

    /**
     * Перенести заказы из отгрузки.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function transferOrdersFromShipment(string|int $campaignId, string|int $shipmentId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}/orders/transfer', [
            'campaignId' => $campaignId,
            'shipmentId' => $shipmentId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Получить ярлыки паллет.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function downloadShipmentPalletLabels(string|int $campaignId, string|int $shipmentId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}/pallet/labels', [
            'campaignId' => $campaignId,
            'shipmentId' => $shipmentId,
        ]);

        return $this->client->get($path, $query);
    }

    /**
     * Установить количество паллет.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function setShipmentPalletsCount(string|int $campaignId, string|int $shipmentId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}/pallets', [
            'campaignId' => $campaignId,
            'shipmentId' => $shipmentId,
        ]);

        return $this->client->put($path, $payload, $query);
    }

    /**
     * Получить транспортную накладную.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function downloadShipmentTransportationWaybill(string|int $campaignId, string|int $shipmentId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}/transportation-waybill', [
            'campaignId' => $campaignId,
            'shipmentId' => $shipmentId,
        ]);

        return $this->client->get($path, $query);
    }

    /**
     * Подтвердить ближайшую отгрузку и получить акт.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function downloadShipmentReceptionTransferAct(string|int $campaignId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/shipments/reception-transfer-act', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->get($path, $query);
    }

    /**
     * Получить заявки на поставку.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getSupplyRequests(string|int $campaignId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/supply-requests', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Получить документы по заявкам на поставку.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getSupplyRequestDocuments(string|int $campaignId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/supply-requests/documents', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    /**
     * Получить товары по заявкам на поставку.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return YandexMarketApiResponse<string, mixed>
     */
    public function getSupplyRequestItems(string|int $campaignId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/campaigns/{campaignId}/supply-requests/items', [
            'campaignId' => $campaignId,
        ]);

        return $this->client->post($path, $payload, $query);
    }
}
