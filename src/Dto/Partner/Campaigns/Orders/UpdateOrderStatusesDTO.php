<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class UpdateOrderStatusesDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<UpdateOrderStatusDTO> $orders
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $orders,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            orders: YandexMarketDtoValue::objectList($payload['orders'] ?? null, UpdateOrderStatusDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['orders']),
        );
    }
}
