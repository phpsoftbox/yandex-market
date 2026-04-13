<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Stats;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrdersStatsDetailsDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?OrdersStatsItemStatusType $itemStatus,
        public ?int $itemCount,
        public ?string $updateDate,
        public ?OrdersStatsStockType $stockType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            itemStatus: YandexMarketDtoValue::object($payload['itemStatus'] ?? null, OrdersStatsItemStatusType::class),
            itemCount: YandexMarketDtoValue::int($payload['itemCount'] ?? null),
            updateDate: YandexMarketDtoValue::string($payload['updateDate'] ?? null),
            stockType: YandexMarketDtoValue::object($payload['stockType'] ?? null, OrdersStatsStockType::class),
            extra: YandexMarketDtoValue::extra($payload, ['itemStatus', 'itemCount', 'updateDate', 'stockType']),
        );
    }
}
