<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderBoxLayoutDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OrderBoxLayoutItemDTO> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $items,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            items: YandexMarketDtoValue::objectList($payload['items'] ?? null, OrderBoxLayoutItemDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['items']),
        );
    }
}
