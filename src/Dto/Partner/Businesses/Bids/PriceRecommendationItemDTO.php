<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Bids;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\CampaignId;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class PriceRecommendationItemDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?CampaignId $campaignId,
        public ?float $price,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            campaignId: YandexMarketDtoValue::object($payload['campaignId'] ?? null, CampaignId::class),
            price: YandexMarketDtoValue::float($payload['price'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['campaignId', 'price']),
        );
    }
}
