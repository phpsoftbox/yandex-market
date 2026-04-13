<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Ratings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CampaignsQualityRatingDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<CampaignQualityRatingDTO> $campaignRatings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $campaignRatings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            campaignRatings: YandexMarketDtoValue::objectList($payload['campaignRatings'] ?? null, CampaignQualityRatingDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['campaignRatings']),
        );
    }
}
