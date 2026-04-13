<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Outlets;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OutletWorkingScheduleItemDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?DayOfWeekType $startDay,
        public ?DayOfWeekType $endDay,
        public ?string $startTime,
        public ?string $endTime,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            startDay: YandexMarketDtoValue::object($payload['startDay'] ?? null, DayOfWeekType::class),
            endDay: YandexMarketDtoValue::object($payload['endDay'] ?? null, DayOfWeekType::class),
            startTime: YandexMarketDtoValue::string($payload['startTime'] ?? null),
            endTime: YandexMarketDtoValue::string($payload['endTime'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['startDay', 'endDay', 'startTime', 'endTime']),
        );
    }
}
