<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Settings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CampaignSettingsScheduleDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<DateDdMmYyyy> $customHolidays
     * @param list<DateDdMmYyyy> $customWorkingDays
     * @param list<DateDdMmYyyy> $totalHolidays
     * @param list<int> $weeklyHolidays
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $availableOnHolidays,
        public array $customHolidays,
        public array $customWorkingDays,
        public ?CampaignSettingsTimePeriodDTO $period,
        public array $totalHolidays,
        public array $weeklyHolidays,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            availableOnHolidays: YandexMarketDtoValue::bool($payload['availableOnHolidays'] ?? null),
            customHolidays: YandexMarketDtoValue::objectList($payload['customHolidays'] ?? null, DateDdMmYyyy::class),
            customWorkingDays: YandexMarketDtoValue::objectList($payload['customWorkingDays'] ?? null, DateDdMmYyyy::class),
            period: YandexMarketDtoValue::object($payload['period'] ?? null, CampaignSettingsTimePeriodDTO::class),
            totalHolidays: YandexMarketDtoValue::objectList($payload['totalHolidays'] ?? null, DateDdMmYyyy::class),
            weeklyHolidays: YandexMarketDtoValue::array($payload['weeklyHolidays'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['availableOnHolidays', 'customHolidays', 'customWorkingDays', 'period', 'totalHolidays', 'weeklyHolidays']),
        );
    }
}
