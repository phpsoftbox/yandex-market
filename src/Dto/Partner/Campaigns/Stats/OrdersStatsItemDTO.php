<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Stats;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Returns\MarketSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrdersStatsItemDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OrdersStatsPriceDTO> $prices
     * @param list<OrdersStatsDetailsDTO> $details
     * @param list<string> $cisList
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $offerName,
        public ?MarketSku $marketSku,
        public ?ShopSku $shopSku,
        public ?int $count,
        public array $prices,
        public ?OrdersStatsWarehouseDTO $warehouse,
        public array $details,
        public array $cisList,
        public ?int $initialCount,
        public ?int $bidFee,
        public ?float $cofinanceThreshold,
        public ?float $cofinanceValue,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offerName: YandexMarketDtoValue::string($payload['offerName'] ?? null),
            marketSku: YandexMarketDtoValue::object($payload['marketSku'] ?? null, MarketSku::class),
            shopSku: YandexMarketDtoValue::object($payload['shopSku'] ?? null, ShopSku::class),
            count: YandexMarketDtoValue::int($payload['count'] ?? null),
            prices: YandexMarketDtoValue::objectList($payload['prices'] ?? null, OrdersStatsPriceDTO::class),
            warehouse: YandexMarketDtoValue::object($payload['warehouse'] ?? null, OrdersStatsWarehouseDTO::class),
            details: YandexMarketDtoValue::objectList($payload['details'] ?? null, OrdersStatsDetailsDTO::class),
            cisList: YandexMarketDtoValue::array($payload['cisList'] ?? null),
            initialCount: YandexMarketDtoValue::int($payload['initialCount'] ?? null),
            bidFee: YandexMarketDtoValue::int($payload['bidFee'] ?? null),
            cofinanceThreshold: YandexMarketDtoValue::float($payload['cofinanceThreshold'] ?? null),
            cofinanceValue: YandexMarketDtoValue::float($payload['cofinanceValue'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['offerName', 'marketSku', 'shopSku', 'count', 'prices', 'warehouse', 'details', 'cisList', 'initialCount', 'bidFee', 'cofinanceThreshold', 'cofinanceValue']),
        );
    }
}
