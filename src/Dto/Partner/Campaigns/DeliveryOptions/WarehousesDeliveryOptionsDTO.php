<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\DeliveryOptions;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class WarehousesDeliveryOptionsDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<BasicOrderItemDTO> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?WarehouseId $warehouseId,
        public ?WarehouseDeliveryOptionsDTO $deliveryOptions,
        public array $items,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            warehouseId: YandexMarketDtoValue::object($payload['warehouseId'] ?? null, WarehouseId::class),
            deliveryOptions: YandexMarketDtoValue::object($payload['deliveryOptions'] ?? null, WarehouseDeliveryOptionsDTO::class),
            items: YandexMarketDtoValue::objectList($payload['items'] ?? null, BasicOrderItemDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['warehouseId', 'deliveryOptions', 'items']),
        );
    }
}
