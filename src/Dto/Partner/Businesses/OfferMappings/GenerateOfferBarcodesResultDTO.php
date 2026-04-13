<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GenerateOfferBarcodesResultDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<ShopSku> $unprocessedOfferIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $unprocessedOfferIds,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            unprocessedOfferIds: YandexMarketDtoValue::objectList($payload['unprocessedOfferIds'] ?? null, ShopSku::class),
            extra: YandexMarketDtoValue::extra($payload, ['unprocessedOfferIds']),
        );
    }
}
