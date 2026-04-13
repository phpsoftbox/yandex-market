<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Regions\Children;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\FlippingPagerDTO;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\PackagingForwardScrollingPagerDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetRegionWithChildrenResponse implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?FlippingPagerDTO $pager,
        public ?PackagingForwardScrollingPagerDTO $paging,
        public ?RegionWithChildrenDTO $regions,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            pager: YandexMarketDtoValue::object($payload['pager'] ?? null, FlippingPagerDTO::class),
            paging: YandexMarketDtoValue::object($payload['paging'] ?? null, PackagingForwardScrollingPagerDTO::class),
            regions: YandexMarketDtoValue::object($payload['regions'] ?? null, RegionWithChildrenDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['pager', 'paging', 'regions']),
        );
    }
}
