<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderItemUnitStatusDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?OrderItemUnitStatusType $status,
        public ?int $count,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            status: YandexMarketDtoValue::object($payload['status'] ?? null, OrderItemUnitStatusType::class),
            count: YandexMarketDtoValue::int($payload['count'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['status', 'count']),
        );
    }
}
