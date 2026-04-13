<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferPrices;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\PackagingForwardScrollingPagerDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OfferDefaultPriceListResponseDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OfferDefaultPriceResponseDTO> $offers
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $offers,
        public ?PackagingForwardScrollingPagerDTO $paging,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offers: YandexMarketDtoValue::objectList($payload['offers'] ?? null, OfferDefaultPriceResponseDTO::class),
            paging: YandexMarketDtoValue::object($payload['paging'] ?? null, PackagingForwardScrollingPagerDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['offers', 'paging']),
        );
    }
}
