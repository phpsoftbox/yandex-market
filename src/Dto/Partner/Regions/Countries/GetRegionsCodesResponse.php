<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Regions\Countries;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetRegionsCodesResponse implements YandexMarketDtoInterface
{
    /**
     * @param list<CountryDTO> $countries
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $countries,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            countries: YandexMarketDtoValue::objectList($payload['countries'] ?? null, CountryDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['countries']),
        );
    }
}
