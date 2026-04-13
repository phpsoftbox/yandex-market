<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\FirstMile;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class BaseShipmentDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<int> $orderIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?string $planIntervalFrom,
        public ?string $planIntervalTo,
        public ?ShipmentType $shipmentType,
        public ?PartnerShipmentWarehouseDTO $warehouse,
        public ?PartnerShipmentWarehouseDTO $warehouseTo,
        public ?string $externalId,
        public ?DeliveryServiceDTO $deliveryService,
        public ?PalletsCountDTO $palletsCount,
        public array $orderIds,
        public ?int $draftCount,
        public ?int $plannedCount,
        public ?int $factCount,
        public ?SignatureDTO $signature,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            planIntervalFrom: YandexMarketDtoValue::string($payload['planIntervalFrom'] ?? null),
            planIntervalTo: YandexMarketDtoValue::string($payload['planIntervalTo'] ?? null),
            shipmentType: YandexMarketDtoValue::object($payload['shipmentType'] ?? null, ShipmentType::class),
            warehouse: YandexMarketDtoValue::object($payload['warehouse'] ?? null, PartnerShipmentWarehouseDTO::class),
            warehouseTo: YandexMarketDtoValue::object($payload['warehouseTo'] ?? null, PartnerShipmentWarehouseDTO::class),
            externalId: YandexMarketDtoValue::string($payload['externalId'] ?? null),
            deliveryService: YandexMarketDtoValue::object($payload['deliveryService'] ?? null, DeliveryServiceDTO::class),
            palletsCount: YandexMarketDtoValue::object($payload['palletsCount'] ?? null, PalletsCountDTO::class),
            orderIds: YandexMarketDtoValue::array($payload['orderIds'] ?? null),
            draftCount: YandexMarketDtoValue::int($payload['draftCount'] ?? null),
            plannedCount: YandexMarketDtoValue::int($payload['plannedCount'] ?? null),
            factCount: YandexMarketDtoValue::int($payload['factCount'] ?? null),
            signature: YandexMarketDtoValue::object($payload['signature'] ?? null, SignatureDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'planIntervalFrom', 'planIntervalTo', 'shipmentType', 'warehouse', 'warehouseTo', 'externalId', 'deliveryService', 'palletsCount', 'orderIds', 'draftCount', 'plannedCount', 'factCount', 'signature']),
        );
    }
}
