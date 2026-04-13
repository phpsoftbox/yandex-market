<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferCards;

use PhpSoftBox\YandexMarket\Dto\Partner\Category\Parameters\OfferCardRecommendationType;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OfferCardRecommendationDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?OfferCardRecommendationType $type,
        public ?int $percent,
        public ?int $remainingRatingPoints,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            type: YandexMarketDtoValue::object($payload['type'] ?? null, OfferCardRecommendationType::class),
            percent: YandexMarketDtoValue::int($payload['percent'] ?? null),
            remainingRatingPoints: YandexMarketDtoValue::int($payload['remainingRatingPoints'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['type', 'percent', 'remainingRatingPoints']),
        );
    }
}
