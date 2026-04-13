<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Outlets;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\PackagingForwardScrollingPagerDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetOutletsResponse implements YandexMarketDtoInterface
{
    /**
     * @param list<FullOutletDTO> $outlets
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $outlets,
        public ?PackagingForwardScrollingPagerDTO $paging,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            outlets: YandexMarketDtoValue::objectList($payload['outlets'] ?? null, FullOutletDTO::class),
            paging: YandexMarketDtoValue::object($payload['paging'] ?? null, PackagingForwardScrollingPagerDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['outlets', 'paging']),
        );
    }
}
