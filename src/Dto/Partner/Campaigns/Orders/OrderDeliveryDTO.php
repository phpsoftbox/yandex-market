<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Settings\DateDdMmYyyy;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderDeliveryDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OrderTrackDTO> $tracks
     * @param list<OrderShipmentDTO> $shipments
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $id,
        public ?OrderDeliveryType $type,
        public ?string $serviceName,
        public ?float $price,
        public ?OrderDeliveryPartnerType $deliveryPartnerType,
        public ?OrderCourierDTO $courier,
        public ?OrderDeliveryDatesDTO $dates,
        public ?RegionDTO $region,
        public ?OrderDeliveryAddressDTO $address,
        public ?OrderVatType $vat,
        public ?int $deliveryServiceId,
        public ?OrderLiftType $liftType,
        public ?float $liftPrice,
        public ?string $outletCode,
        public ?DateDdMmYyyy $outletStorageLimitDate,
        public ?OrderDeliveryDispatchType $dispatchType,
        public array $tracks,
        public array $shipments,
        public ?bool $estimated,
        public ?OrderDeliveryEacType $eacType,
        public ?string $eacCode,
        public ?string $receiveCode,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::string($payload['id'] ?? null),
            type: YandexMarketDtoValue::object($payload['type'] ?? null, OrderDeliveryType::class),
            serviceName: YandexMarketDtoValue::string($payload['serviceName'] ?? null),
            price: YandexMarketDtoValue::float($payload['price'] ?? null),
            deliveryPartnerType: YandexMarketDtoValue::object($payload['deliveryPartnerType'] ?? null, OrderDeliveryPartnerType::class),
            courier: YandexMarketDtoValue::object($payload['courier'] ?? null, OrderCourierDTO::class),
            dates: YandexMarketDtoValue::object($payload['dates'] ?? null, OrderDeliveryDatesDTO::class),
            region: YandexMarketDtoValue::object($payload['region'] ?? null, RegionDTO::class),
            address: YandexMarketDtoValue::object($payload['address'] ?? null, OrderDeliveryAddressDTO::class),
            vat: YandexMarketDtoValue::object($payload['vat'] ?? null, OrderVatType::class),
            deliveryServiceId: YandexMarketDtoValue::int($payload['deliveryServiceId'] ?? null),
            liftType: YandexMarketDtoValue::object($payload['liftType'] ?? null, OrderLiftType::class),
            liftPrice: YandexMarketDtoValue::float($payload['liftPrice'] ?? null),
            outletCode: YandexMarketDtoValue::string($payload['outletCode'] ?? null),
            outletStorageLimitDate: YandexMarketDtoValue::object($payload['outletStorageLimitDate'] ?? null, DateDdMmYyyy::class),
            dispatchType: YandexMarketDtoValue::object($payload['dispatchType'] ?? null, OrderDeliveryDispatchType::class),
            tracks: YandexMarketDtoValue::objectList($payload['tracks'] ?? null, OrderTrackDTO::class),
            shipments: YandexMarketDtoValue::objectList($payload['shipments'] ?? null, OrderShipmentDTO::class),
            estimated: YandexMarketDtoValue::bool($payload['estimated'] ?? null),
            eacType: YandexMarketDtoValue::object($payload['eacType'] ?? null, OrderDeliveryEacType::class),
            eacCode: YandexMarketDtoValue::string($payload['eacCode'] ?? null),
            receiveCode: YandexMarketDtoValue::string($payload['receiveCode'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'type', 'serviceName', 'price', 'deliveryPartnerType', 'courier', 'dates', 'region', 'address', 'vat', 'deliveryServiceId', 'liftType', 'liftPrice', 'outletCode', 'outletStorageLimitDate', 'dispatchType', 'tracks', 'shipments', 'estimated', 'eacType', 'eacCode', 'receiveCode']),
        );
    }
}
