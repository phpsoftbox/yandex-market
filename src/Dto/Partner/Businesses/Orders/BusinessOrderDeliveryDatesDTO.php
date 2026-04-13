<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class BusinessOrderDeliveryDatesDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $fromDate,
        public ?string $toDate,
        public ?string $fromTime,
        public ?string $toTime,
        public ?string $realDeliveryDate,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            fromDate: YandexMarketDtoValue::string($payload['fromDate'] ?? null),
            toDate: YandexMarketDtoValue::string($payload['toDate'] ?? null),
            fromTime: YandexMarketDtoValue::string($payload['fromTime'] ?? null),
            toTime: YandexMarketDtoValue::string($payload['toTime'] ?? null),
            realDeliveryDate: YandexMarketDtoValue::string($payload['realDeliveryDate'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['fromDate', 'toDate', 'fromTime', 'toTime', 'realDeliveryDate']),
        );
    }
}
