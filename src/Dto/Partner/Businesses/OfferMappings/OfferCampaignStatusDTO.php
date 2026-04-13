<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\CampaignId;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OfferCampaignStatusDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?CampaignId $campaignId,
        public ?OfferCampaignStatusType $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            campaignId: YandexMarketDtoValue::object($payload['campaignId'] ?? null, CampaignId::class),
            status: YandexMarketDtoValue::object($payload['status'] ?? null, OfferCampaignStatusType::class),
            extra: YandexMarketDtoValue::extra($payload, ['campaignId', 'status']),
        );
    }
}
