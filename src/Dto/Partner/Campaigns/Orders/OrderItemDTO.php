<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderItemDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OrderItemPromoDTO> $promos
     * @param list<OrderItemInstanceDTO> $instances
     * @param list<OrderItemDetailDTO> $details
     * @param list<OrderItemSubsidyDTO> $subsidies
     * @param list<OrderItemInstanceType> $requiredInstanceTypes
     * @param list<OrderItemTagType> $tags
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?ShopSku $offerId,
        public ?string $offerName,
        public ?float $price,
        public ?float $buyerPrice,
        public ?float $buyerPriceBeforeDiscount,
        public ?float $priceBeforeDiscount,
        public ?int $count,
        public ?OrderVatType $vat,
        public ?ShopSku $shopSku,
        public ?float $subsidy,
        public ?string $partnerWarehouseId,
        public array $promos,
        public array $instances,
        public array $details,
        public array $subsidies,
        public array $requiredInstanceTypes,
        public array $tags,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            offerId: YandexMarketDtoValue::object($payload['offerId'] ?? null, ShopSku::class),
            offerName: YandexMarketDtoValue::string($payload['offerName'] ?? null),
            price: YandexMarketDtoValue::float($payload['price'] ?? null),
            buyerPrice: YandexMarketDtoValue::float($payload['buyerPrice'] ?? null),
            buyerPriceBeforeDiscount: YandexMarketDtoValue::float($payload['buyerPriceBeforeDiscount'] ?? null),
            priceBeforeDiscount: YandexMarketDtoValue::float($payload['priceBeforeDiscount'] ?? null),
            count: YandexMarketDtoValue::int($payload['count'] ?? null),
            vat: YandexMarketDtoValue::object($payload['vat'] ?? null, OrderVatType::class),
            shopSku: YandexMarketDtoValue::object($payload['shopSku'] ?? null, ShopSku::class),
            subsidy: YandexMarketDtoValue::float($payload['subsidy'] ?? null),
            partnerWarehouseId: YandexMarketDtoValue::string($payload['partnerWarehouseId'] ?? null),
            promos: YandexMarketDtoValue::objectList($payload['promos'] ?? null, OrderItemPromoDTO::class),
            instances: YandexMarketDtoValue::objectList($payload['instances'] ?? null, OrderItemInstanceDTO::class),
            details: YandexMarketDtoValue::objectList($payload['details'] ?? null, OrderItemDetailDTO::class),
            subsidies: YandexMarketDtoValue::objectList($payload['subsidies'] ?? null, OrderItemSubsidyDTO::class),
            requiredInstanceTypes: YandexMarketDtoValue::objectList($payload['requiredInstanceTypes'] ?? null, OrderItemInstanceType::class),
            tags: YandexMarketDtoValue::objectList($payload['tags'] ?? null, OrderItemTagType::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'offerId', 'offerName', 'price', 'buyerPrice', 'buyerPriceBeforeDiscount', 'priceBeforeDiscount', 'count', 'vat', 'shopSku', 'subsidy', 'partnerWarehouseId', 'promos', 'instances', 'details', 'subsidies', 'requiredInstanceTypes', 'tags']),
        );
    }
}
