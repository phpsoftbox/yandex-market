<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Promos;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class PromoOfferParamsDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PromoOfferDiscountParamsDTO $discountParams,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            discountParams: YandexMarketDtoValue::object($payload['discountParams'] ?? null, PromoOfferDiscountParamsDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['discountParams']),
        );
    }
}
