<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Regions\Countries;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\CountryCode;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\RegionDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CountryDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?RegionDTO $region,
        public ?CountryCode $countryCode,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            region: YandexMarketDtoValue::object($payload['region'] ?? null, RegionDTO::class),
            countryCode: YandexMarketDtoValue::object($payload['countryCode'] ?? null, CountryCode::class),
            extra: YandexMarketDtoValue::extra($payload, ['region', 'countryCode']),
        );
    }
}
