<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\HiddenOffers;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetHiddenOffersResultDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<HiddenOfferDTO> $hiddenOffers
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PackagingScrollingPagerDTO $paging,
        public array $hiddenOffers,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            paging: YandexMarketDtoValue::object($payload['paging'] ?? null, PackagingScrollingPagerDTO::class),
            hiddenOffers: YandexMarketDtoValue::objectList($payload['hiddenOffers'] ?? null, HiddenOfferDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['paging', 'hiddenOffers']),
        );
    }
}
