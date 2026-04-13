<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Category\Parameters;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CategoryParameterUnitDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<UnitDTO> $units
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $defaultUnitId,
        public array $units,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            defaultUnitId: YandexMarketDtoValue::int($payload['defaultUnitId'] ?? null),
            units: YandexMarketDtoValue::objectList($payload['units'] ?? null, UnitDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['defaultUnitId', 'units']),
        );
    }
}
