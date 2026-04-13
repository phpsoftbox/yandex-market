<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\ReturnDeliveryOptions;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetReturnDeliveryOptionsDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PickupReturnDeliveryOptionsDTO $pickupDelivery,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            pickupDelivery: YandexMarketDtoValue::object($payload['pickupDelivery'] ?? null, PickupReturnDeliveryOptionsDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['pickupDelivery']),
        );
    }
}
