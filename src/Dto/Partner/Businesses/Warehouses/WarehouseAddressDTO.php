<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Warehouses;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\GpsDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class WarehouseAddressDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $city,
        public ?string $street,
        public ?string $number,
        public ?string $building,
        public ?string $block,
        public ?GpsDTO $gps,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            city: YandexMarketDtoValue::string($payload['city'] ?? null),
            street: YandexMarketDtoValue::string($payload['street'] ?? null),
            number: YandexMarketDtoValue::string($payload['number'] ?? null),
            building: YandexMarketDtoValue::string($payload['building'] ?? null),
            block: YandexMarketDtoValue::string($payload['block'] ?? null),
            gps: YandexMarketDtoValue::object($payload['gps'] ?? null, GpsDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['city', 'street', 'number', 'building', 'block', 'gps']),
        );
    }
}
