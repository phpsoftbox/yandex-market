<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Returns;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\OperationDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CancelReturnDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?OperationDTO $operation,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            operation: YandexMarketDtoValue::object($payload['operation'] ?? null, OperationDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['operation']),
        );
    }
}
