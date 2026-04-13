<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\OfferPrices;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Returns\MarketSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OfferPriceResponseDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $id,
        public ?PriceDTO $price,
        public ?MarketSku $marketSku,
        public ?string $updatedAt,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::string($payload['id'] ?? null),
            price: YandexMarketDtoValue::object($payload['price'] ?? null, PriceDTO::class),
            marketSku: YandexMarketDtoValue::object($payload['marketSku'] ?? null, MarketSku::class),
            updatedAt: YandexMarketDtoValue::string($payload['updatedAt'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'price', 'marketSku', 'updatedAt']),
        );
    }
}
