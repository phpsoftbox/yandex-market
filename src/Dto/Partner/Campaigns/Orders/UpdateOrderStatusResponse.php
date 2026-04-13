<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class UpdateOrderStatusResponse implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?OrderDTO $order,
        public ?OperationDTO $operation,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            order: YandexMarketDtoValue::object($payload['order'] ?? null, OrderDTO::class),
            operation: YandexMarketDtoValue::object($payload['operation'] ?? null, OperationDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['order', 'operation']),
        );
    }
}
