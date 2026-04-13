<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Returns;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ReturnItemDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<ReturnDecisionDTO> $decisions
     * @param list<ReturnInstanceDTO> $instances
     * @param list<TrackDTO> $tracks
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?MarketSku $marketSku,
        public ?ShopSku $shopSku,
        public ?int $count,
        public array $decisions,
        public array $instances,
        public array $tracks,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            marketSku: YandexMarketDtoValue::object($payload['marketSku'] ?? null, MarketSku::class),
            shopSku: YandexMarketDtoValue::object($payload['shopSku'] ?? null, ShopSku::class),
            count: YandexMarketDtoValue::int($payload['count'] ?? null),
            decisions: YandexMarketDtoValue::objectList($payload['decisions'] ?? null, ReturnDecisionDTO::class),
            instances: YandexMarketDtoValue::objectList($payload['instances'] ?? null, ReturnInstanceDTO::class),
            tracks: YandexMarketDtoValue::objectList($payload['tracks'] ?? null, TrackDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['marketSku', 'shopSku', 'count', 'decisions', 'instances', 'tracks']),
        );
    }
}
