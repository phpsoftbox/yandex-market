<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Operations;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetOperationsResultDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OperationResultDTO> $operations
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $operations,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            operations: YandexMarketDtoValue::objectList($payload['operations'] ?? null, OperationResultDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['operations']),
        );
    }
}
