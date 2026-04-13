<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class AgeDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $value,
        public ?AgeUnitType $ageUnit,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            value: YandexMarketDtoValue::float($payload['value'] ?? null),
            ageUnit: YandexMarketDtoValue::object($payload['ageUnit'] ?? null, AgeUnitType::class),
            extra: YandexMarketDtoValue::extra($payload, ['value', 'ageUnit']),
        );
    }
}
