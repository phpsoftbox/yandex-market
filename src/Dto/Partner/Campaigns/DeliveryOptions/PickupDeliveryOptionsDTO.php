<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\DeliveryOptions;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class PickupDeliveryOptionsDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<PickupOptionsDTO> $pickupOptions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $pickupOptions,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            pickupOptions: YandexMarketDtoValue::objectList($payload['pickupOptions'] ?? null, PickupOptionsDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['pickupOptions']),
        );
    }
}
