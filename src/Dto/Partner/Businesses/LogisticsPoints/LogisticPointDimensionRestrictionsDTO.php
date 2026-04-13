<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\LogisticsPoints;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class LogisticPointDimensionRestrictionsDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $weight,
        public ?int $height,
        public ?int $width,
        public ?int $length,
        public ?int $dimensionsSum,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            weight: YandexMarketDtoValue::int($payload['weight'] ?? null),
            height: YandexMarketDtoValue::int($payload['height'] ?? null),
            width: YandexMarketDtoValue::int($payload['width'] ?? null),
            length: YandexMarketDtoValue::int($payload['length'] ?? null),
            dimensionsSum: YandexMarketDtoValue::int($payload['dimensionsSum'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['weight', 'height', 'width', 'length', 'dimensionsSum']),
        );
    }
}
