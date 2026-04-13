<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\SupplyRequests;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class SupplyRequestLocationDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $requestedDate,
        public ?int $serviceId,
        public ?string $name,
        public ?SupplyRequestLocationAddressDTO $address,
        public ?SupplyRequestLocationType $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            requestedDate: YandexMarketDtoValue::string($payload['requestedDate'] ?? null),
            serviceId: YandexMarketDtoValue::int($payload['serviceId'] ?? null),
            name: YandexMarketDtoValue::string($payload['name'] ?? null),
            address: YandexMarketDtoValue::object($payload['address'] ?? null, SupplyRequestLocationAddressDTO::class),
            type: YandexMarketDtoValue::object($payload['type'] ?? null, SupplyRequestLocationType::class),
            extra: YandexMarketDtoValue::extra($payload, ['requestedDate', 'serviceId', 'name', 'address', 'type']),
        );
    }
}
