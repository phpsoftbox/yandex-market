<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Settings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CampaignSettingsDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $countryRegion,
        public ?string $shopName,
        public ?bool $showInContext,
        public ?bool $showInPremium,
        public ?bool $useOpenStat,
        public ?CampaignSettingsLocalRegionDTO $localRegion,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            countryRegion: YandexMarketDtoValue::int($payload['countryRegion'] ?? null),
            shopName: YandexMarketDtoValue::string($payload['shopName'] ?? null),
            showInContext: YandexMarketDtoValue::bool($payload['showInContext'] ?? null),
            showInPremium: YandexMarketDtoValue::bool($payload['showInPremium'] ?? null),
            useOpenStat: YandexMarketDtoValue::bool($payload['useOpenStat'] ?? null),
            localRegion: YandexMarketDtoValue::object($payload['localRegion'] ?? null, CampaignSettingsLocalRegionDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['countryRegion', 'shopName', 'showInContext', 'showInPremium', 'useOpenStat', 'localRegion']),
        );
    }
}
