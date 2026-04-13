<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Offers;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Returns\BasePriceDTO;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OfferForRecommendationDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ShopSku $offerId,
        public ?BasePriceDTO $price,
        public ?PriceCompetitivenessType $competitiveness,
        public ?int $shows,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offerId: YandexMarketDtoValue::object($payload['offerId'] ?? null, ShopSku::class),
            price: YandexMarketDtoValue::object($payload['price'] ?? null, BasePriceDTO::class),
            competitiveness: YandexMarketDtoValue::object($payload['competitiveness'] ?? null, PriceCompetitivenessType::class),
            shows: YandexMarketDtoValue::int($payload['shows'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['offerId', 'price', 'competitiveness', 'shows']),
        );
    }
}
