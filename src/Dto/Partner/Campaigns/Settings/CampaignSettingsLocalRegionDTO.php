<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Settings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CampaignSettingsLocalRegionDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?string $name,
        public ?RegionType $type,
        public ?CampaignSettingsScheduleSourceType $deliveryOptionsSource,
        public ?CampaignSettingsDeliveryDTO $delivery,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            name: YandexMarketDtoValue::string($payload['name'] ?? null),
            type: YandexMarketDtoValue::object($payload['type'] ?? null, RegionType::class),
            deliveryOptionsSource: YandexMarketDtoValue::object($payload['deliveryOptionsSource'] ?? null, CampaignSettingsScheduleSourceType::class),
            delivery: YandexMarketDtoValue::object($payload['delivery'] ?? null, CampaignSettingsDeliveryDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'name', 'type', 'deliveryOptionsSource', 'delivery']),
        );
    }
}
