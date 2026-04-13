<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Categories\MaxSaleQuantum;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CategoryErrorDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $categoryId,
        public ?CategoryErrorType $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            categoryId: YandexMarketDtoValue::int($payload['categoryId'] ?? null),
            type: YandexMarketDtoValue::object($payload['type'] ?? null, CategoryErrorType::class),
            extra: YandexMarketDtoValue::extra($payload, ['categoryId', 'type']),
        );
    }
}
