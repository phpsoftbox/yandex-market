<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Offers;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OfferRecommendationDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?OfferForRecommendationDTO $offer,
        public ?OfferRecommendationInfoDTO $recommendation,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offer: YandexMarketDtoValue::object($payload['offer'] ?? null, OfferForRecommendationDTO::class),
            recommendation: YandexMarketDtoValue::object($payload['recommendation'] ?? null, OfferRecommendationInfoDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['offer', 'recommendation']),
        );
    }
}
