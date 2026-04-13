<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderUpdateOptionsDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?DeliveryIntervalsUpdateOptionsDTO $deliveryIntervals,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            deliveryIntervals: YandexMarketDtoValue::object($payload['deliveryIntervals'] ?? null, DeliveryIntervalsUpdateOptionsDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['deliveryIntervals']),
        );
    }
}
