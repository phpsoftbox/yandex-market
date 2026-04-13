<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Outlets;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OutletWorkingScheduleDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OutletWorkingScheduleItemDTO> $scheduleItems
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $workInHoliday,
        public array $scheduleItems,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            workInHoliday: YandexMarketDtoValue::bool($payload['workInHoliday'] ?? null),
            scheduleItems: YandexMarketDtoValue::objectList($payload['scheduleItems'] ?? null, OutletWorkingScheduleItemDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['workInHoliday', 'scheduleItems']),
        );
    }
}
