<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class BusinessOrderShipmentDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?string $shipmentDate,
        public ?string $shipmentTime,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            shipmentDate: YandexMarketDtoValue::string($payload['shipmentDate'] ?? null),
            shipmentTime: YandexMarketDtoValue::string($payload['shipmentTime'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'shipmentDate', 'shipmentTime']),
        );
    }
}
