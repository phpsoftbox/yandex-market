<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class DeliveryIntervalsUpdateOptionDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?DeliveryDateIntervalDTO $deliveryDateInterval,
        public ?TimeIntervalDTO $deliveryTimeInterval,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            deliveryDateInterval: YandexMarketDtoValue::object($payload['deliveryDateInterval'] ?? null, DeliveryDateIntervalDTO::class),
            deliveryTimeInterval: YandexMarketDtoValue::object($payload['deliveryTimeInterval'] ?? null, TimeIntervalDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['deliveryDateInterval', 'deliveryTimeInterval']),
        );
    }
}
