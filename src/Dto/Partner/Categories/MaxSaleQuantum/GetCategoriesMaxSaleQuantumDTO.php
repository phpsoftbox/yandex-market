<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Categories\MaxSaleQuantum;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetCategoriesMaxSaleQuantumDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<MaxSaleQuantumDTO> $results
     * @param list<CategoryErrorDTO> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $results,
        public array $errors,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            results: YandexMarketDtoValue::objectList($payload['results'] ?? null, MaxSaleQuantumDTO::class),
            errors: YandexMarketDtoValue::objectList($payload['errors'] ?? null, CategoryErrorDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['results', 'errors']),
        );
    }
}
