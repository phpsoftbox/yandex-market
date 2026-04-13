<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Offers;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class WarehouseOfferDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<WarehouseStockDTO> $stocks
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ShopSku $offerId,
        public ?TurnoverDTO $turnoverSummary,
        public array $stocks,
        public ?string $updatedAt,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offerId: YandexMarketDtoValue::object($payload['offerId'] ?? null, ShopSku::class),
            turnoverSummary: YandexMarketDtoValue::object($payload['turnoverSummary'] ?? null, TurnoverDTO::class),
            stocks: YandexMarketDtoValue::objectList($payload['stocks'] ?? null, WarehouseStockDTO::class),
            updatedAt: YandexMarketDtoValue::string($payload['updatedAt'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['offerId', 'turnoverSummary', 'stocks', 'updatedAt']),
        );
    }
}
