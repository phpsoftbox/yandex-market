<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Category\Parameters;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CategoryParameterDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OfferCardRecommendationType> $recommendationTypes
     * @param list<ParameterValueOptionDTO> $values
     * @param list<ValueRestrictionDTO> $valueRestrictions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?string $name,
        public ?ParameterType $type,
        public ?CategoryParameterUnitDTO $unit,
        public ?string $description,
        public array $recommendationTypes,
        public ?bool $required,
        public ?bool $filtering,
        public ?bool $distinctive,
        public ?bool $multivalue,
        public ?bool $allowCustomValues,
        public array $values,
        public ?ParameterValueConstraintsDTO $constraints,
        public array $valueRestrictions,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            name: YandexMarketDtoValue::string($payload['name'] ?? null),
            type: YandexMarketDtoValue::object($payload['type'] ?? null, ParameterType::class),
            unit: YandexMarketDtoValue::object($payload['unit'] ?? null, CategoryParameterUnitDTO::class),
            description: YandexMarketDtoValue::string($payload['description'] ?? null),
            recommendationTypes: YandexMarketDtoValue::objectList($payload['recommendationTypes'] ?? null, OfferCardRecommendationType::class),
            required: YandexMarketDtoValue::bool($payload['required'] ?? null),
            filtering: YandexMarketDtoValue::bool($payload['filtering'] ?? null),
            distinctive: YandexMarketDtoValue::bool($payload['distinctive'] ?? null),
            multivalue: YandexMarketDtoValue::bool($payload['multivalue'] ?? null),
            allowCustomValues: YandexMarketDtoValue::bool($payload['allowCustomValues'] ?? null),
            values: YandexMarketDtoValue::objectList($payload['values'] ?? null, ParameterValueOptionDTO::class),
            constraints: YandexMarketDtoValue::object($payload['constraints'] ?? null, ParameterValueConstraintsDTO::class),
            valueRestrictions: YandexMarketDtoValue::objectList($payload['valueRestrictions'] ?? null, ValueRestrictionDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'name', 'type', 'unit', 'description', 'recommendationTypes', 'required', 'filtering', 'distinctive', 'multivalue', 'allowCustomValues', 'values', 'constraints', 'valueRestrictions']),
        );
    }
}
