<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferPrices;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings\DiscountBase;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Settings\CurrencyType;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OfferDefaultPriceDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $minimumForBestseller,
        public ?bool $excludedFromBestsellers,
        public ?float $value,
        public ?CurrencyType $currencyId,
        public ?DiscountBase $discountBase,
        public ?string $updatedAt,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            minimumForBestseller: YandexMarketDtoValue::float($payload['minimumForBestseller'] ?? null),
            excludedFromBestsellers: YandexMarketDtoValue::bool($payload['excludedFromBestsellers'] ?? null),
            value: YandexMarketDtoValue::float($payload['value'] ?? null),
            currencyId: YandexMarketDtoValue::object($payload['currencyId'] ?? null, CurrencyType::class),
            discountBase: YandexMarketDtoValue::object($payload['discountBase'] ?? null, DiscountBase::class),
            updatedAt: YandexMarketDtoValue::string($payload['updatedAt'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['minimumForBestseller', 'excludedFromBestsellers', 'value', 'currencyId', 'discountBase', 'updatedAt']),
        );
    }
}
