<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderItemSubsidyDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?OrderItemSubsidyType $type,
        public ?float $amount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            type: YandexMarketDtoValue::object($payload['type'] ?? null, OrderItemSubsidyType::class),
            amount: YandexMarketDtoValue::float($payload['amount'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['type', 'amount']),
        );
    }
}
