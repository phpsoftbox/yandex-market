<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Offers;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings\GetPriceWithDiscountDTO;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings\OfferCampaignStatusType;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetCampaignOfferDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OfferErrorDTO> $errors
     * @param list<OfferErrorDTO> $warnings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?GetPriceWithDiscountDTO $basicPrice,
        public ?GetPriceWithVatDTO $campaignPrice,
        public ?OfferCampaignStatusType $status,
        public array $errors,
        public array $warnings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            basicPrice: YandexMarketDtoValue::object($payload['basicPrice'] ?? null, GetPriceWithDiscountDTO::class),
            campaignPrice: YandexMarketDtoValue::object($payload['campaignPrice'] ?? null, GetPriceWithVatDTO::class),
            status: YandexMarketDtoValue::object($payload['status'] ?? null, OfferCampaignStatusType::class),
            errors: YandexMarketDtoValue::objectList($payload['errors'] ?? null, OfferErrorDTO::class),
            warnings: YandexMarketDtoValue::objectList($payload['warnings'] ?? null, OfferErrorDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['basicPrice', 'campaignPrice', 'status', 'errors', 'warnings']),
        );
    }
}
