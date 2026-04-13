<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Categories\MaxSaleQuantum;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Settings\ApiResponse;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetCategoriesMaxSaleQuantumResponse implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ApiResponse $value,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            value: YandexMarketDtoValue::object($payload['value'] ?? null, ApiResponse::class),
            extra: YandexMarketDtoValue::extra($payload, ['value']),
        );
    }
}
