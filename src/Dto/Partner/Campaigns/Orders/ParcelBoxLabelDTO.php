<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ParcelBoxLabelDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?Url $url,
        public ?string $supplierName,
        public ?string $deliveryServiceName,
        public ?int $orderId,
        public ?string $orderNum,
        public ?string $recipientName,
        public ?int $boxId,
        public ?string $fulfilmentId,
        public ?string $place,
        public ?string $weight,
        public ?string $deliveryServiceId,
        public ?string $deliveryAddress,
        public ?string $shipmentDate,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            url: YandexMarketDtoValue::object($payload['url'] ?? null, Url::class),
            supplierName: YandexMarketDtoValue::string($payload['supplierName'] ?? null),
            deliveryServiceName: YandexMarketDtoValue::string($payload['deliveryServiceName'] ?? null),
            orderId: YandexMarketDtoValue::int($payload['orderId'] ?? null),
            orderNum: YandexMarketDtoValue::string($payload['orderNum'] ?? null),
            recipientName: YandexMarketDtoValue::string($payload['recipientName'] ?? null),
            boxId: YandexMarketDtoValue::int($payload['boxId'] ?? null),
            fulfilmentId: YandexMarketDtoValue::string($payload['fulfilmentId'] ?? null),
            place: YandexMarketDtoValue::string($payload['place'] ?? null),
            weight: YandexMarketDtoValue::string($payload['weight'] ?? null),
            deliveryServiceId: YandexMarketDtoValue::string($payload['deliveryServiceId'] ?? null),
            deliveryAddress: YandexMarketDtoValue::string($payload['deliveryAddress'] ?? null),
            shipmentDate: YandexMarketDtoValue::string($payload['shipmentDate'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['url', 'supplierName', 'deliveryServiceName', 'orderId', 'orderNum', 'recipientName', 'boxId', 'fulfilmentId', 'place', 'weight', 'deliveryServiceId', 'deliveryAddress', 'shipmentDate']),
        );
    }
}
