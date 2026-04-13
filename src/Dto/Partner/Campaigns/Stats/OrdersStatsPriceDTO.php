<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Stats;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrdersStatsPriceDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?OrdersStatsPriceType $type,
        public ?float $costPerItem,
        public ?float $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            type: YandexMarketDtoValue::object($payload['type'] ?? null, OrdersStatsPriceType::class),
            costPerItem: YandexMarketDtoValue::float($payload['costPerItem'] ?? null),
            total: YandexMarketDtoValue::float($payload['total'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['type', 'costPerItem', 'total']),
        );
    }
}
