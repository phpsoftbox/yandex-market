<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class BriefOrderItemDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OrderItemInstanceDTO> $instances
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?OrderVatType $vat,
        public ?int $count,
        public ?float $price,
        public ?string $offerName,
        public ?ShopSku $offerId,
        public array $instances,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            vat: YandexMarketDtoValue::object($payload['vat'] ?? null, OrderVatType::class),
            count: YandexMarketDtoValue::int($payload['count'] ?? null),
            price: YandexMarketDtoValue::float($payload['price'] ?? null),
            offerName: YandexMarketDtoValue::string($payload['offerName'] ?? null),
            offerId: YandexMarketDtoValue::object($payload['offerId'] ?? null, ShopSku::class),
            instances: YandexMarketDtoValue::objectList($payload['instances'] ?? null, OrderItemInstanceDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'vat', 'count', 'price', 'offerName', 'offerId', 'instances']),
        );
    }
}
