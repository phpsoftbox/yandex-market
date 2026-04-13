<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\OrderItemInstanceDTO;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\OrderItemInstanceType;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\OrderItemTagType;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class BusinessOrderItemDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OrderItemInstanceDTO> $instances
     * @param list<OrderItemInstanceType> $requiredInstanceTypes
     * @param list<OrderItemUnitStatusDTO> $itemStatuses
     * @param list<OrderItemTagType> $tags
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?ShopSku $offerId,
        public ?string $offerName,
        public ?int $count,
        public ?ItemPriceDTO $prices,
        public array $instances,
        public array $requiredInstanceTypes,
        public array $itemStatuses,
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
            count: YandexMarketDtoValue::int($payload['count'] ?? null),
            prices: YandexMarketDtoValue::object($payload['prices'] ?? null, ItemPriceDTO::class),
            instances: YandexMarketDtoValue::objectList($payload['instances'] ?? null, OrderItemInstanceDTO::class),
            requiredInstanceTypes: YandexMarketDtoValue::objectList($payload['requiredInstanceTypes'] ?? null, OrderItemInstanceType::class),
            itemStatuses: YandexMarketDtoValue::objectList($payload['itemStatuses'] ?? null, OrderItemUnitStatusDTO::class),
            tags: YandexMarketDtoValue::objectList($payload['tags'] ?? null, OrderItemTagType::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'offerId', 'offerName', 'count', 'prices', 'instances', 'requiredInstanceTypes', 'itemStatuses', 'tags']),
        );
    }
}
