<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Warehouses;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Warehouses\WarehouseAddressDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class FulfillmentWarehouseDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?string $name,
        public ?WarehouseAddressDTO $address,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            name: YandexMarketDtoValue::string($payload['name'] ?? null),
            address: YandexMarketDtoValue::object($payload['address'] ?? null, WarehouseAddressDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'name', 'address']),
        );
    }
}
