<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Categories\Tree;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CategoryDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<CategoryDTO> $children
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?string $name,
        public array $children,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            name: YandexMarketDtoValue::string($payload['name'] ?? null),
            children: YandexMarketDtoValue::objectList($payload['children'] ?? null, CategoryDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'name', 'children']),
        );
    }
}
