<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class UpdateOrderStatusDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?OrderStatusType $status,
        public ?OrderSubstatusType $substatus,
        public ?OrderUpdateStatusType $updateStatus,
        public ?string $errorDetails,
        public ?OperationDTO $operation,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            status: YandexMarketDtoValue::object($payload['status'] ?? null, OrderStatusType::class),
            substatus: YandexMarketDtoValue::object($payload['substatus'] ?? null, OrderSubstatusType::class),
            updateStatus: YandexMarketDtoValue::object($payload['updateStatus'] ?? null, OrderUpdateStatusType::class),
            errorDetails: YandexMarketDtoValue::string($payload['errorDetails'] ?? null),
            operation: YandexMarketDtoValue::object($payload['operation'] ?? null, OperationDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'status', 'substatus', 'updateStatus', 'errorDetails', 'operation']),
        );
    }
}
