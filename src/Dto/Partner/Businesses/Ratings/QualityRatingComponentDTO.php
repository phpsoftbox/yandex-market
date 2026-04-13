<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Ratings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class QualityRatingComponentDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $value,
        public ?QualityRatingComponentType $componentType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            value: YandexMarketDtoValue::float($payload['value'] ?? null),
            componentType: YandexMarketDtoValue::object($payload['componentType'] ?? null, QualityRatingComponentType::class),
            extra: YandexMarketDtoValue::extra($payload, ['value', 'componentType']),
        );
    }
}
