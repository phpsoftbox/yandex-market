<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\DeliveryOptions;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetDeliveryOptionsDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<WarehousesDeliveryOptionsDTO> $warehousesDeliveryOptions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $warehousesDeliveryOptions,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            warehousesDeliveryOptions: YandexMarketDtoValue::objectList($payload['warehousesDeliveryOptions'] ?? null, WarehousesDeliveryOptionsDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['warehousesDeliveryOptions']),
        );
    }
}
