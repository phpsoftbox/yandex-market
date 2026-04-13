<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Operations;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\OperationId;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\OperationType;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OperationResultDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?OperationId $id,
        public ?OperationType $type,
        public ?OperationStatusType $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::object($payload['id'] ?? null, OperationId::class),
            type: YandexMarketDtoValue::object($payload['type'] ?? null, OperationType::class),
            status: YandexMarketDtoValue::object($payload['status'] ?? null, OperationStatusType::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'type', 'status']),
        );
    }
}
