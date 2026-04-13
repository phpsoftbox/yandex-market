<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\SupplyRequests;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class SupplyRequestIdDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?SupplyRequestId $id,
        public ?string $marketplaceRequestId,
        public ?string $warehouseRequestId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::object($payload['id'] ?? null, SupplyRequestId::class),
            marketplaceRequestId: YandexMarketDtoValue::string($payload['marketplaceRequestId'] ?? null),
            warehouseRequestId: YandexMarketDtoValue::string($payload['warehouseRequestId'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'marketplaceRequestId', 'warehouseRequestId']),
        );
    }
}
