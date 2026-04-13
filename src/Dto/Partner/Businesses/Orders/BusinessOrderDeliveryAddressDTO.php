<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\GpsDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class BusinessOrderDeliveryAddressDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $country,
        public ?string $postcode,
        public ?string $city,
        public ?string $district,
        public ?string $subway,
        public ?string $street,
        public ?string $house,
        public ?string $block,
        public ?string $entrance,
        public ?string $entryphone,
        public ?string $floor,
        public ?string $apartment,
        public ?GpsDTO $gps,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            country: YandexMarketDtoValue::string($payload['country'] ?? null),
            postcode: YandexMarketDtoValue::string($payload['postcode'] ?? null),
            city: YandexMarketDtoValue::string($payload['city'] ?? null),
            district: YandexMarketDtoValue::string($payload['district'] ?? null),
            subway: YandexMarketDtoValue::string($payload['subway'] ?? null),
            street: YandexMarketDtoValue::string($payload['street'] ?? null),
            house: YandexMarketDtoValue::string($payload['house'] ?? null),
            block: YandexMarketDtoValue::string($payload['block'] ?? null),
            entrance: YandexMarketDtoValue::string($payload['entrance'] ?? null),
            entryphone: YandexMarketDtoValue::string($payload['entryphone'] ?? null),
            floor: YandexMarketDtoValue::string($payload['floor'] ?? null),
            apartment: YandexMarketDtoValue::string($payload['apartment'] ?? null),
            gps: YandexMarketDtoValue::object($payload['gps'] ?? null, GpsDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['country', 'postcode', 'city', 'district', 'subway', 'street', 'house', 'block', 'entrance', 'entryphone', 'floor', 'apartment', 'gps']),
        );
    }
}
