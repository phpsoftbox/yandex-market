<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Settings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CampaignSettingsDeliveryDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?CampaignSettingsScheduleDTO $schedule,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            schedule: YandexMarketDtoValue::object($payload['schedule'] ?? null, CampaignSettingsScheduleDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['schedule']),
        );
    }
}
