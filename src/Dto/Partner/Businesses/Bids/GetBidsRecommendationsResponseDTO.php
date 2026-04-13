<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Bids;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetBidsRecommendationsResponseDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<SkuBidRecommendationItemDTO> $recommendations
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $recommendations,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            recommendations: YandexMarketDtoValue::objectList($payload['recommendations'] ?? null, SkuBidRecommendationItemDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['recommendations']),
        );
    }
}
