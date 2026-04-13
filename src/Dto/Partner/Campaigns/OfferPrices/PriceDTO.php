<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\OfferPrices;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings\DiscountBase;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Settings\CurrencyType;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class PriceDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $value,
        public ?DiscountBase $discountBase,
        public ?CurrencyType $currencyId,
        public ?VatType $vat,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            value: YandexMarketDtoValue::float($payload['value'] ?? null),
            discountBase: YandexMarketDtoValue::object($payload['discountBase'] ?? null, DiscountBase::class),
            currencyId: YandexMarketDtoValue::object($payload['currencyId'] ?? null, CurrencyType::class),
            vat: YandexMarketDtoValue::object($payload['vat'] ?? null, VatType::class),
            extra: YandexMarketDtoValue::extra($payload, ['value', 'discountBase', 'currencyId', 'vat']),
        );
    }
}
