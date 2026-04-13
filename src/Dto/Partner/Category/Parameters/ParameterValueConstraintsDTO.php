<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Category\Parameters;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ParameterValueConstraintsDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $minValue,
        public ?float $maxValue,
        public ?int $maxLength,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            minValue: YandexMarketDtoValue::float($payload['minValue'] ?? null),
            maxValue: YandexMarketDtoValue::float($payload['maxValue'] ?? null),
            maxLength: YandexMarketDtoValue::int($payload['maxLength'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['minValue', 'maxValue', 'maxLength']),
        );
    }
}
