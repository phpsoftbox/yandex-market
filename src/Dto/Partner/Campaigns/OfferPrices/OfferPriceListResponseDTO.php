<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\OfferPrices;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\PackagingForwardScrollingPagerDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OfferPriceListResponseDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OfferPriceResponseDTO> $offers
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $offers,
        public ?PackagingForwardScrollingPagerDTO $paging,
        public ?int $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offers: YandexMarketDtoValue::objectList($payload['offers'] ?? null, OfferPriceResponseDTO::class),
            paging: YandexMarketDtoValue::object($payload['paging'] ?? null, PackagingForwardScrollingPagerDTO::class),
            total: YandexMarketDtoValue::int($payload['total'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['offers', 'paging', 'total']),
        );
    }
}
