<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Stats;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrdersStatsSubsidyDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?OrdersStatsSubsidyOperationType $operationType,
        public ?OrdersStatsSubsidyType $type,
        public ?float $amount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            operationType: YandexMarketDtoValue::object($payload['operationType'] ?? null, OrdersStatsSubsidyOperationType::class),
            type: YandexMarketDtoValue::object($payload['type'] ?? null, OrdersStatsSubsidyType::class),
            amount: YandexMarketDtoValue::float($payload['amount'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['operationType', 'type', 'amount']),
        );
    }
}
