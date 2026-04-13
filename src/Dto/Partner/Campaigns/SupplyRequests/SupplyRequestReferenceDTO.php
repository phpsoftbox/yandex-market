<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\SupplyRequests;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class SupplyRequestReferenceDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?SupplyRequestIdDTO $id,
        public ?SupplyRequestReferenceType $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::object($payload['id'] ?? null, SupplyRequestIdDTO::class),
            type: YandexMarketDtoValue::object($payload['type'] ?? null, SupplyRequestReferenceType::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'type']),
        );
    }
}
