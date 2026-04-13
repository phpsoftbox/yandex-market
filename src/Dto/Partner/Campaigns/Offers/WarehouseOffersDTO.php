<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Offers;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class WarehouseOffersDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<WarehouseOfferDTO> $offers
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $warehouseId,
        public array $offers,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            warehouseId: YandexMarketDtoValue::int($payload['warehouseId'] ?? null),
            offers: YandexMarketDtoValue::objectList($payload['offers'] ?? null, WarehouseOfferDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['warehouseId', 'offers']),
        );
    }
}
