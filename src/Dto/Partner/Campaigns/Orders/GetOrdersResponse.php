<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\FlippingPagerDTO;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\PackagingForwardScrollingPagerDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetOrdersResponse implements YandexMarketDtoInterface
{
    /**
     * @param list<OrderDTO> $orders
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?FlippingPagerDTO $pager,
        public array $orders,
        public ?PackagingForwardScrollingPagerDTO $paging,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            pager: YandexMarketDtoValue::object($payload['pager'] ?? null, FlippingPagerDTO::class),
            orders: YandexMarketDtoValue::objectList($payload['orders'] ?? null, OrderDTO::class),
            paging: YandexMarketDtoValue::object($payload['paging'] ?? null, PackagingForwardScrollingPagerDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['pager', 'orders', 'paging']),
        );
    }
}
