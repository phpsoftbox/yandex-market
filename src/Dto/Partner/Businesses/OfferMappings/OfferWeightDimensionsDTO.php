<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OfferWeightDimensionsDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $length,
        public ?float $width,
        public ?float $height,
        public ?float $weight,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            length: YandexMarketDtoValue::float($payload['length'] ?? null),
            width: YandexMarketDtoValue::float($payload['width'] ?? null),
            height: YandexMarketDtoValue::float($payload['height'] ?? null),
            weight: YandexMarketDtoValue::float($payload['weight'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['length', 'width', 'height', 'weight']),
        );
    }
}
