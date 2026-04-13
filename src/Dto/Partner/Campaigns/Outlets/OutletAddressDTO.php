<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Outlets;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OutletAddressDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $regionId,
        public ?string $street,
        public ?string $number,
        public ?string $building,
        public ?string $estate,
        public ?string $block,
        public ?string $additional,
        public ?int $km,
        public ?string $city,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            regionId: YandexMarketDtoValue::int($payload['regionId'] ?? null),
            street: YandexMarketDtoValue::string($payload['street'] ?? null),
            number: YandexMarketDtoValue::string($payload['number'] ?? null),
            building: YandexMarketDtoValue::string($payload['building'] ?? null),
            estate: YandexMarketDtoValue::string($payload['estate'] ?? null),
            block: YandexMarketDtoValue::string($payload['block'] ?? null),
            additional: YandexMarketDtoValue::string($payload['additional'] ?? null),
            km: YandexMarketDtoValue::int($payload['km'] ?? null),
            city: YandexMarketDtoValue::string($payload['city'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['regionId', 'street', 'number', 'building', 'estate', 'block', 'additional', 'km', 'city']),
        );
    }
}
