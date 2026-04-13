<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\PriceQuarantine;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\PackagingForwardScrollingPagerDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetQuarantineOffersResultDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<QuarantineOfferDTO> $offers
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PackagingForwardScrollingPagerDTO $paging,
        public array $offers,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            paging: YandexMarketDtoValue::object($payload['paging'] ?? null, PackagingForwardScrollingPagerDTO::class),
            offers: YandexMarketDtoValue::objectList($payload['offers'] ?? null, QuarantineOfferDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['paging', 'offers']),
        );
    }
}
