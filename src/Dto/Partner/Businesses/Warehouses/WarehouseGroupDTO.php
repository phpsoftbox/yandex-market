<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Warehouses;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class WarehouseGroupDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<WarehouseDTO> $warehouses
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $name,
        public ?WarehouseDTO $mainWarehouse,
        public array $warehouses,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            name: YandexMarketDtoValue::string($payload['name'] ?? null),
            mainWarehouse: YandexMarketDtoValue::object($payload['mainWarehouse'] ?? null, WarehouseDTO::class),
            warehouses: YandexMarketDtoValue::objectList($payload['warehouses'] ?? null, WarehouseDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['name', 'mainWarehouse', 'warehouses']),
        );
    }
}
