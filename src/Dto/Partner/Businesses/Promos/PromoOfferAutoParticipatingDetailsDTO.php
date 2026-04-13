<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Promos;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\CampaignId;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class PromoOfferAutoParticipatingDetailsDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<CampaignId> $campaignIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $campaignIds,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            campaignIds: YandexMarketDtoValue::objectList($payload['campaignIds'] ?? null, CampaignId::class),
            extra: YandexMarketDtoValue::extra($payload, ['campaignIds']),
        );
    }
}
