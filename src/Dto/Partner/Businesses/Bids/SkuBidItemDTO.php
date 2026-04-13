<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Bids;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class SkuBidItemDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ShopSku $sku,
        public ?Bid $bid,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            sku: YandexMarketDtoValue::object($payload['sku'] ?? null, ShopSku::class),
            bid: YandexMarketDtoValue::object($payload['bid'] ?? null, Bid::class),
            extra: YandexMarketDtoValue::extra($payload, ['sku', 'bid']),
        );
    }
}
