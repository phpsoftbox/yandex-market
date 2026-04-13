<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetOrderIdentifiersStatusDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OrderItemValidationStatusDTO> $items
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
            items: YandexMarketDtoValue::objectList($payload['items'] ?? null, OrderItemValidationStatusDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['items']),
        );
    }
}
