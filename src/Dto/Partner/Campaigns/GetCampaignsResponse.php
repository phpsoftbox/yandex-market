<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetCampaignsResponse implements YandexMarketDtoInterface
{
    /**
     * @param list<CampaignDTO> $campaigns
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $campaigns,
        public ?FlippingPagerDTO $pager,
        public ?PackagingForwardScrollingPagerDTO $paging,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            campaigns: YandexMarketDtoValue::objectList($payload['campaigns'] ?? null, CampaignDTO::class),
            pager: YandexMarketDtoValue::object($payload['pager'] ?? null, FlippingPagerDTO::class),
            paging: YandexMarketDtoValue::object($payload['paging'] ?? null, PackagingForwardScrollingPagerDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['campaigns', 'pager', 'paging']),
        );
    }
}
