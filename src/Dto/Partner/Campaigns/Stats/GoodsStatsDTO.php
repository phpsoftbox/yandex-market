<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Stats;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GoodsStatsDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<GoodsStatsGoodsDTO> $shopSkus
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $shopSkus,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            shopSkus: YandexMarketDtoValue::objectList($payload['shopSkus'] ?? null, GoodsStatsGoodsDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['shopSkus']),
        );
    }
}
