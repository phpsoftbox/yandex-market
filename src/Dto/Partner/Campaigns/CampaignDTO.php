<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Settings\BusinessDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CampaignDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $domain,
        public ?CampaignId $id,
        public ?int $clientId,
        public ?BusinessDTO $business,
        public ?PlacementType $placementType,
        public ?ApiAvailabilityStatusType $apiAvailability,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            domain: YandexMarketDtoValue::string($payload['domain'] ?? null),
            id: YandexMarketDtoValue::object($payload['id'] ?? null, CampaignId::class),
            clientId: YandexMarketDtoValue::int($payload['clientId'] ?? null),
            business: YandexMarketDtoValue::object($payload['business'] ?? null, BusinessDTO::class),
            placementType: YandexMarketDtoValue::object($payload['placementType'] ?? null, PlacementType::class),
            apiAvailability: YandexMarketDtoValue::object($payload['apiAvailability'] ?? null, ApiAvailabilityStatusType::class),
            extra: YandexMarketDtoValue::extra($payload, ['domain', 'id', 'clientId', 'business', 'placementType', 'apiAvailability']),
        );
    }
}
