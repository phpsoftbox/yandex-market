<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Bids;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\PackagingForwardScrollingPagerDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetBidsInfoResponseDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<SkuBidItemDTO> $bids
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $bids,
        public ?PackagingForwardScrollingPagerDTO $paging,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            bids: YandexMarketDtoValue::objectList($payload['bids'] ?? null, SkuBidItemDTO::class),
            paging: YandexMarketDtoValue::object($payload['paging'] ?? null, PackagingForwardScrollingPagerDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['bids', 'paging']),
        );
    }
}
