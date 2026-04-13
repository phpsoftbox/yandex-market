<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class DeleteOffersDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<ShopSku> $notDeletedOfferIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $notDeletedOfferIds,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            notDeletedOfferIds: YandexMarketDtoValue::objectList($payload['notDeletedOfferIds'] ?? null, ShopSku::class),
            extra: YandexMarketDtoValue::extra($payload, ['notDeletedOfferIds']),
        );
    }
}
