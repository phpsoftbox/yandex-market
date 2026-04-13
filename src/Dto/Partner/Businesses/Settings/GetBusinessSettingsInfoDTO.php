<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Settings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetBusinessSettingsInfoDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<BusinessTraitType> $traits
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?BusinessDTO $info,
        public ?BusinessSettingsDTO $settings,
        public ?BusinessSubscriptionLevelType $subscriptionLevel,
        public array $traits,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            info: YandexMarketDtoValue::object($payload['info'] ?? null, BusinessDTO::class),
            settings: YandexMarketDtoValue::object($payload['settings'] ?? null, BusinessSettingsDTO::class),
            subscriptionLevel: YandexMarketDtoValue::object($payload['subscriptionLevel'] ?? null, BusinessSubscriptionLevelType::class),
            traits: YandexMarketDtoValue::objectList($payload['traits'] ?? null, BusinessTraitType::class),
            extra: YandexMarketDtoValue::extra($payload, ['info', 'settings', 'subscriptionLevel', 'traits']),
        );
    }
}
