<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Regions;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\RegionDTO;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\PackagingForwardScrollingPagerDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetRegionsResponse implements YandexMarketDtoInterface
{
    /**
     * @param list<RegionDTO> $regions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $regions,
        public ?PackagingForwardScrollingPagerDTO $paging,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            regions: YandexMarketDtoValue::objectList($payload['regions'] ?? null, RegionDTO::class),
            paging: YandexMarketDtoValue::object($payload['paging'] ?? null, PackagingForwardScrollingPagerDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['regions', 'paging']),
        );
    }
}
