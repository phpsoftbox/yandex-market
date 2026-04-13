<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Settings\DateDdMmYyyy;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderDeliveryDatesDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?DateDdMmYyyy $fromDate,
        public ?DateDdMmYyyy $toDate,
        public ?string $fromTime,
        public ?string $toTime,
        public ?DateDdMmYyyy $realDeliveryDate,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            fromDate: YandexMarketDtoValue::object($payload['fromDate'] ?? null, DateDdMmYyyy::class),
            toDate: YandexMarketDtoValue::object($payload['toDate'] ?? null, DateDdMmYyyy::class),
            fromTime: YandexMarketDtoValue::string($payload['fromTime'] ?? null),
            toTime: YandexMarketDtoValue::string($payload['toTime'] ?? null),
            realDeliveryDate: YandexMarketDtoValue::object($payload['realDeliveryDate'] ?? null, DateDdMmYyyy::class),
            extra: YandexMarketDtoValue::extra($payload, ['fromDate', 'toDate', 'fromTime', 'toTime', 'realDeliveryDate']),
        );
    }
}
