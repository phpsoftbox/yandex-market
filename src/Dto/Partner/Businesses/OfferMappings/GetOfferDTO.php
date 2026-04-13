<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetOfferDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OfferCampaignStatusDTO> $campaigns
     * @param list<OfferSellingProgramDTO> $sellingPrograms
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?GetPriceWithDiscountDTO $basicPrice,
        public ?GetPriceDTO $purchasePrice,
        public ?GetPriceDTO $additionalExpenses,
        public ?OfferCardStatusType $cardStatus,
        public array $campaigns,
        public array $sellingPrograms,
        public ?OfferMediaFilesDTO $mediaFiles,
        public ?bool $archived,
        public ?string $groupId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            basicPrice: YandexMarketDtoValue::object($payload['basicPrice'] ?? null, GetPriceWithDiscountDTO::class),
            purchasePrice: YandexMarketDtoValue::object($payload['purchasePrice'] ?? null, GetPriceDTO::class),
            additionalExpenses: YandexMarketDtoValue::object($payload['additionalExpenses'] ?? null, GetPriceDTO::class),
            cardStatus: YandexMarketDtoValue::object($payload['cardStatus'] ?? null, OfferCardStatusType::class),
            campaigns: YandexMarketDtoValue::objectList($payload['campaigns'] ?? null, OfferCampaignStatusDTO::class),
            sellingPrograms: YandexMarketDtoValue::objectList($payload['sellingPrograms'] ?? null, OfferSellingProgramDTO::class),
            mediaFiles: YandexMarketDtoValue::object($payload['mediaFiles'] ?? null, OfferMediaFilesDTO::class),
            archived: YandexMarketDtoValue::bool($payload['archived'] ?? null),
            groupId: YandexMarketDtoValue::string($payload['groupId'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['basicPrice', 'purchasePrice', 'additionalExpenses', 'cardStatus', 'campaigns', 'sellingPrograms', 'mediaFiles', 'archived', 'groupId']),
        );
    }
}
