<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\FirstMile;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ShipmentStatusChangeDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ShipmentStatusType $status,
        public ?string $description,
        public ?string $updateTime,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            status: YandexMarketDtoValue::object($payload['status'] ?? null, ShipmentStatusType::class),
            description: YandexMarketDtoValue::string($payload['description'] ?? null),
            updateTime: YandexMarketDtoValue::string($payload['updateTime'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['status', 'description', 'updateTime']),
        );
    }
}
