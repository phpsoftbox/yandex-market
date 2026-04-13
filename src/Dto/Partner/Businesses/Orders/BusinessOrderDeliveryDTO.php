<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\OrderDeliveryDispatchType;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\OrderDeliveryPartnerType;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\OrderDeliveryType;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\OrderTrackDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class BusinessOrderDeliveryDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<BusinessOrderBoxLayoutDTO> $boxesLayout
     * @param list<OrderTrackDTO> $tracks
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?OrderDeliveryType $type,
        public ?string $serviceName,
        public ?int $deliveryServiceId,
        public ?string $warehouseId,
        public ?OrderDeliveryPartnerType $deliveryPartnerType,
        public ?OrderDeliveryDispatchType $dispatchType,
        public ?BusinessOrderDeliveryDatesDTO $dates,
        public ?BusinessOrderShipmentDTO $shipment,
        public ?BusinessOrderCourierDeliveryDTO $courier,
        public ?BusinessOrderPickupDeliveryDTO $pickup,
        public ?BusinessOrderTransferDTO $transfer,
        public array $boxesLayout,
        public array $tracks,
        public ?bool $estimated,
        public ?string $receiveBarcode,
        public ?string $receiveCode,
        public ?DigitalGoodsDeliveryDetailsDTO $digitalGoods,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            type: YandexMarketDtoValue::object($payload['type'] ?? null, OrderDeliveryType::class),
            serviceName: YandexMarketDtoValue::string($payload['serviceName'] ?? null),
            deliveryServiceId: YandexMarketDtoValue::int($payload['deliveryServiceId'] ?? null),
            warehouseId: YandexMarketDtoValue::string($payload['warehouseId'] ?? null),
            deliveryPartnerType: YandexMarketDtoValue::object($payload['deliveryPartnerType'] ?? null, OrderDeliveryPartnerType::class),
            dispatchType: YandexMarketDtoValue::object($payload['dispatchType'] ?? null, OrderDeliveryDispatchType::class),
            dates: YandexMarketDtoValue::object($payload['dates'] ?? null, BusinessOrderDeliveryDatesDTO::class),
            shipment: YandexMarketDtoValue::object($payload['shipment'] ?? null, BusinessOrderShipmentDTO::class),
            courier: YandexMarketDtoValue::object($payload['courier'] ?? null, BusinessOrderCourierDeliveryDTO::class),
            pickup: YandexMarketDtoValue::object($payload['pickup'] ?? null, BusinessOrderPickupDeliveryDTO::class),
            transfer: YandexMarketDtoValue::object($payload['transfer'] ?? null, BusinessOrderTransferDTO::class),
            boxesLayout: YandexMarketDtoValue::objectList($payload['boxesLayout'] ?? null, BusinessOrderBoxLayoutDTO::class),
            tracks: YandexMarketDtoValue::objectList($payload['tracks'] ?? null, OrderTrackDTO::class),
            estimated: YandexMarketDtoValue::bool($payload['estimated'] ?? null),
            receiveBarcode: YandexMarketDtoValue::string($payload['receiveBarcode'] ?? null),
            receiveCode: YandexMarketDtoValue::string($payload['receiveCode'] ?? null),
            digitalGoods: YandexMarketDtoValue::object($payload['digitalGoods'] ?? null, DigitalGoodsDeliveryDetailsDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['type', 'serviceName', 'deliveryServiceId', 'warehouseId', 'deliveryPartnerType', 'dispatchType', 'dates', 'shipment', 'courier', 'pickup', 'transfer', 'boxesLayout', 'tracks', 'estimated', 'receiveBarcode', 'receiveCode', 'digitalGoods']),
        );
    }
}
