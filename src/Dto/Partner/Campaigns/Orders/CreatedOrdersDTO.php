<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CreatedOrdersDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<CreatedOrderDTO> $orders
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
            orders: YandexMarketDtoValue::objectList($payload['orders'] ?? null, CreatedOrderDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['orders']),
        );
    }
}
