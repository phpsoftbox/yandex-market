<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Warehouses;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class FulfillmentWarehousesDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<FulfillmentWarehouseDTO> $warehouses
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $warehouses,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            warehouses: YandexMarketDtoValue::objectList($payload['warehouses'] ?? null, FulfillmentWarehouseDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['warehouses']),
        );
    }
}
