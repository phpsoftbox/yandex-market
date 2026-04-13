<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\SupplyRequests;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders\CurrencyValueDTO;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class SupplyRequestItemDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ShopSku $offerId,
        public ?string $name,
        public ?CurrencyValueDTO $price,
        public ?SupplyRequestItemCountersDTO $counters,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offerId: YandexMarketDtoValue::object($payload['offerId'] ?? null, ShopSku::class),
            name: YandexMarketDtoValue::string($payload['name'] ?? null),
            price: YandexMarketDtoValue::object($payload['price'] ?? null, CurrencyValueDTO::class),
            counters: YandexMarketDtoValue::object($payload['counters'] ?? null, SupplyRequestItemCountersDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['offerId', 'name', 'price', 'counters']),
        );
    }
}
