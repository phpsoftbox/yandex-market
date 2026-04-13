<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Category\Parameters;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CategoryContentParametersDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<CategoryParameterDTO> $parameters
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?CategoryId $categoryId,
        public array $parameters,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            categoryId: YandexMarketDtoValue::object($payload['categoryId'] ?? null, CategoryId::class),
            parameters: YandexMarketDtoValue::objectList($payload['parameters'] ?? null, CategoryParameterDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['categoryId', 'parameters']),
        );
    }
}
