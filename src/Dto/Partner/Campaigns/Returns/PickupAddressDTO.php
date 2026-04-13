<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Returns;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class PickupAddressDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $country,
        public ?string $city,
        public ?string $street,
        public ?string $house,
        public ?string $postcode,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            country: YandexMarketDtoValue::string($payload['country'] ?? null),
            city: YandexMarketDtoValue::string($payload['city'] ?? null),
            street: YandexMarketDtoValue::string($payload['street'] ?? null),
            house: YandexMarketDtoValue::string($payload['house'] ?? null),
            postcode: YandexMarketDtoValue::string($payload['postcode'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['country', 'city', 'street', 'house', 'postcode']),
        );
    }
}
