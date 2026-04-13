<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Ratings;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\CampaignId;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CampaignQualityRatingDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<QualityRatingDTO> $ratings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?CampaignId $campaignId,
        public array $ratings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            campaignId: YandexMarketDtoValue::object($payload['campaignId'] ?? null, CampaignId::class),
            ratings: YandexMarketDtoValue::objectList($payload['ratings'] ?? null, QualityRatingDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['campaignId', 'ratings']),
        );
    }
}
