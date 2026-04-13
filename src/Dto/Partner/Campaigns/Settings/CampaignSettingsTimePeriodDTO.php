<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Settings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CampaignSettingsTimePeriodDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?DateDdMmYyyy $fromDate,
        public ?DateDdMmYyyy $toDate,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            fromDate: YandexMarketDtoValue::object($payload['fromDate'] ?? null, DateDdMmYyyy::class),
            toDate: YandexMarketDtoValue::object($payload['toDate'] ?? null, DateDdMmYyyy::class),
            extra: YandexMarketDtoValue::extra($payload, ['fromDate', 'toDate']),
        );
    }
}
