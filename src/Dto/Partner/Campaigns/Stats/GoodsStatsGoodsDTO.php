<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Stats;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\Url;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Returns\MarketSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GoodsStatsGoodsDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<GoodsStatsWarehouseDTO> $warehouses
     * @param list<TariffDTO> $tariffs
     * @param list<Url> $pictures
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ShopSku $shopSku,
        public ?MarketSku $marketSku,
        public ?string $name,
        public ?float $price,
        public ?int $categoryId,
        public ?string $categoryName,
        public ?GoodsStatsWeightDimensionsDTO $weightDimensions,
        public array $warehouses,
        public array $tariffs,
        public array $pictures,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            shopSku: YandexMarketDtoValue::object($payload['shopSku'] ?? null, ShopSku::class),
            marketSku: YandexMarketDtoValue::object($payload['marketSku'] ?? null, MarketSku::class),
            name: YandexMarketDtoValue::string($payload['name'] ?? null),
            price: YandexMarketDtoValue::float($payload['price'] ?? null),
            categoryId: YandexMarketDtoValue::int($payload['categoryId'] ?? null),
            categoryName: YandexMarketDtoValue::string($payload['categoryName'] ?? null),
            weightDimensions: YandexMarketDtoValue::object($payload['weightDimensions'] ?? null, GoodsStatsWeightDimensionsDTO::class),
            warehouses: YandexMarketDtoValue::objectList($payload['warehouses'] ?? null, GoodsStatsWarehouseDTO::class),
            tariffs: YandexMarketDtoValue::objectList($payload['tariffs'] ?? null, TariffDTO::class),
            pictures: YandexMarketDtoValue::objectList($payload['pictures'] ?? null, Url::class),
            extra: YandexMarketDtoValue::extra($payload, ['shopSku', 'marketSku', 'name', 'price', 'categoryId', 'categoryName', 'weightDimensions', 'warehouses', 'tariffs', 'pictures']),
        );
    }
}
