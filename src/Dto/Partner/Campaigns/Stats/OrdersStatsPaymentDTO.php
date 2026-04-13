<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Stats;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrdersStatsPaymentDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $id,
        public ?string $date,
        public ?OrdersStatsPaymentType $type,
        public ?OrdersStatsPaymentSourceType $source,
        public ?float $total,
        public ?OrdersStatsPaymentOrderDTO $paymentOrder,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::string($payload['id'] ?? null),
            date: YandexMarketDtoValue::string($payload['date'] ?? null),
            type: YandexMarketDtoValue::object($payload['type'] ?? null, OrdersStatsPaymentType::class),
            source: YandexMarketDtoValue::object($payload['source'] ?? null, OrdersStatsPaymentSourceType::class),
            total: YandexMarketDtoValue::float($payload['total'] ?? null),
            paymentOrder: YandexMarketDtoValue::object($payload['paymentOrder'] ?? null, OrdersStatsPaymentOrderDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'date', 'type', 'source', 'total', 'paymentOrder']),
        );
    }
}
