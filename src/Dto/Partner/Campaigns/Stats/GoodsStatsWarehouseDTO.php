<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Stats;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Offers\WarehouseStockDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GoodsStatsWarehouseDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<WarehouseStockDTO> $stocks
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?string $name,
        public array $stocks,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            name: YandexMarketDtoValue::string($payload['name'] ?? null),
            stocks: YandexMarketDtoValue::objectList($payload['stocks'] ?? null, WarehouseStockDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'name', 'stocks']),
        );
    }
}
