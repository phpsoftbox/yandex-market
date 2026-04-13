<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Settings\DateDdMmYyyy;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderItemDetailDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $itemCount,
        public ?OrderItemStatusType $itemStatus,
        public ?DateDdMmYyyy $updateDate,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            itemCount: YandexMarketDtoValue::int($payload['itemCount'] ?? null),
            itemStatus: YandexMarketDtoValue::object($payload['itemStatus'] ?? null, OrderItemStatusType::class),
            updateDate: YandexMarketDtoValue::object($payload['updateDate'] ?? null, DateDdMmYyyy::class),
            extra: YandexMarketDtoValue::extra($payload, ['itemCount', 'itemStatus', 'updateDate']),
        );
    }
}
