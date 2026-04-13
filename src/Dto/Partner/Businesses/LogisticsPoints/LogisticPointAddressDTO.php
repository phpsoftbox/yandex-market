<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\LogisticsPoints;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\GpsDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class LogisticPointAddressDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $fullAddress,
        public ?GpsDTO $gps,
        public ?int $regionId,
        public ?string $city,
        public ?string $street,
        public ?string $house,
        public ?string $building,
        public ?string $block,
        public ?int $km,
        public ?string $additional,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            fullAddress: YandexMarketDtoValue::string($payload['fullAddress'] ?? null),
            gps: YandexMarketDtoValue::object($payload['gps'] ?? null, GpsDTO::class),
            regionId: YandexMarketDtoValue::int($payload['regionId'] ?? null),
            city: YandexMarketDtoValue::string($payload['city'] ?? null),
            street: YandexMarketDtoValue::string($payload['street'] ?? null),
            house: YandexMarketDtoValue::string($payload['house'] ?? null),
            building: YandexMarketDtoValue::string($payload['building'] ?? null),
            block: YandexMarketDtoValue::string($payload['block'] ?? null),
            km: YandexMarketDtoValue::int($payload['km'] ?? null),
            additional: YandexMarketDtoValue::string($payload['additional'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['fullAddress', 'gps', 'regionId', 'city', 'street', 'house', 'building', 'block', 'km', 'additional']),
        );
    }
}
