<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\DeliveryOptions;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CourierDeliveryOptionsDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<CourierDeliveryOptionDTO> $courierDeliveryOptions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $courierDeliveryOptions,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            courierDeliveryOptions: YandexMarketDtoValue::objectList($payload['courierDeliveryOptions'] ?? null, CourierDeliveryOptionDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['courierDeliveryOptions']),
        );
    }
}
