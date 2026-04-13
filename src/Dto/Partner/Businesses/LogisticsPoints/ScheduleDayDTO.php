<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\LogisticsPoints;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Outlets\DayOfWeekType;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ScheduleDayDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?DayOfWeekType $day,
        public ?string $startTime,
        public ?string $endTime,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            day: YandexMarketDtoValue::object($payload['day'] ?? null, DayOfWeekType::class),
            startTime: YandexMarketDtoValue::string($payload['startTime'] ?? null),
            endTime: YandexMarketDtoValue::string($payload['endTime'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['day', 'startTime', 'endTime']),
        );
    }
}
