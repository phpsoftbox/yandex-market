<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\LogisticsPoints;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class LogisticPointScheduleDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<ScheduleDayDTO> $schedule
     * @param list<string> $holidays
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $schedule,
        public array $holidays,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            schedule: YandexMarketDtoValue::objectList($payload['schedule'] ?? null, ScheduleDayDTO::class),
            holidays: YandexMarketDtoValue::array($payload['holidays'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['schedule', 'holidays']),
        );
    }
}
