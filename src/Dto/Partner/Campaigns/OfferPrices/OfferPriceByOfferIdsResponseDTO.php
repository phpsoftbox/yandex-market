<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\OfferPrices;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OfferPriceByOfferIdsResponseDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ShopSku $offerId,
        public ?PriceDTO $price,
        public ?string $updatedAt,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offerId: YandexMarketDtoValue::object($payload['offerId'] ?? null, ShopSku::class),
            price: YandexMarketDtoValue::object($payload['price'] ?? null, PriceDTO::class),
            updatedAt: YandexMarketDtoValue::string($payload['updatedAt'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['offerId', 'price', 'updatedAt']),
        );
    }
}
