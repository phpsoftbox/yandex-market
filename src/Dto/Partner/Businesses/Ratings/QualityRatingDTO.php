<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Ratings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class QualityRatingDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<QualityRatingComponentDTO> $components
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $rating,
        public ?string $calculationDate,
        public array $components,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            rating: YandexMarketDtoValue::int($payload['rating'] ?? null),
            calculationDate: YandexMarketDtoValue::string($payload['calculationDate'] ?? null),
            components: YandexMarketDtoValue::objectList($payload['components'] ?? null, QualityRatingComponentDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['rating', 'calculationDate', 'components']),
        );
    }
}
