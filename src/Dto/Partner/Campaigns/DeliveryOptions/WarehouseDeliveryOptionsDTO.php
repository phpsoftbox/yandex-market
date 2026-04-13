<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\DeliveryOptions;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class WarehouseDeliveryOptionsDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PickupDeliveryOptionsDTO $pickupDelivery,
        public ?CourierDeliveryOptionsDTO $courierDelivery,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            pickupDelivery: YandexMarketDtoValue::object($payload['pickupDelivery'] ?? null, PickupDeliveryOptionsDTO::class),
            courierDelivery: YandexMarketDtoValue::object($payload['courierDelivery'] ?? null, CourierDeliveryOptionsDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['pickupDelivery', 'courierDelivery']),
        );
    }
}
