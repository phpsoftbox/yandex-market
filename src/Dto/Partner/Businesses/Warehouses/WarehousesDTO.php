<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Warehouses;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class WarehousesDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<WarehouseDTO> $warehouses
     * @param list<WarehouseGroupDTO> $warehouseGroups
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $warehouses,
        public array $warehouseGroups,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            warehouses: YandexMarketDtoValue::objectList($payload['warehouses'] ?? null, WarehouseDTO::class),
            warehouseGroups: YandexMarketDtoValue::objectList($payload['warehouseGroups'] ?? null, WarehouseGroupDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['warehouses', 'warehouseGroups']),
        );
    }
}
