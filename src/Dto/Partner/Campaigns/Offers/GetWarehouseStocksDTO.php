<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Offers;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\PackagingForwardScrollingPagerDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetWarehouseStocksDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<WarehouseOffersDTO> $warehouses
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PackagingForwardScrollingPagerDTO $paging,
        public array $warehouses,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            paging: YandexMarketDtoValue::object($payload['paging'] ?? null, PackagingForwardScrollingPagerDTO::class),
            warehouses: YandexMarketDtoValue::objectList($payload['warehouses'] ?? null, WarehouseOffersDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['paging', 'warehouses']),
        );
    }
}
