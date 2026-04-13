<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\Url;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class BaseOfferResponseDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<Url> $pictures
     * @param list<Url> $videos
     * @param list<OfferManualDTO> $manuals
     * @param list<string> $certificates
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ShopSku $offerId,
        public ?string $name,
        public ?PartnerMarketCategoryId $marketCategoryId,
        public ?OfferCategory $category,
        public array $pictures,
        public array $videos,
        public array $manuals,
        public ?OfferVendor $vendor,
        public ?OfferBarcodes $barcodes,
        public ?string $description,
        public ?BaseOfferManufacturerCountries $manufacturerCountries,
        public ?OfferWeightDimensionsDTO $weightDimensions,
        public ?OfferVendorCode $vendorCode,
        public ?BaseOfferTags $tags,
        public ?TimePeriodDTO $shelfLife,
        public ?TimePeriodDTO $lifeTime,
        public ?TimePeriodDTO $guaranteePeriod,
        public ?BaseOfferCustomsCommodityCode $customsCommodityCode,
        public ?BaseOfferCommodityCodes $commodityCodes,
        public array $certificates,
        public ?BaseOfferBoxCount $boxCount,
        public ?OfferConditionDTO $condition,
        public ?OfferType $type,
        public ?BaseOfferDownloadable $downloadable,
        public ?BaseOfferAdult $adult,
        public ?AgeDTO $age,
        public ?BaseOfferParams $params,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offerId: YandexMarketDtoValue::object($payload['offerId'] ?? null, ShopSku::class),
            name: YandexMarketDtoValue::string($payload['name'] ?? null),
            marketCategoryId: YandexMarketDtoValue::object($payload['marketCategoryId'] ?? null, PartnerMarketCategoryId::class),
            category: YandexMarketDtoValue::object($payload['category'] ?? null, OfferCategory::class),
            pictures: YandexMarketDtoValue::objectList($payload['pictures'] ?? null, Url::class),
            videos: YandexMarketDtoValue::objectList($payload['videos'] ?? null, Url::class),
            manuals: YandexMarketDtoValue::objectList($payload['manuals'] ?? null, OfferManualDTO::class),
            vendor: YandexMarketDtoValue::object($payload['vendor'] ?? null, OfferVendor::class),
            barcodes: YandexMarketDtoValue::object($payload['barcodes'] ?? null, OfferBarcodes::class),
            description: YandexMarketDtoValue::string($payload['description'] ?? null),
            manufacturerCountries: YandexMarketDtoValue::object($payload['manufacturerCountries'] ?? null, BaseOfferManufacturerCountries::class),
            weightDimensions: YandexMarketDtoValue::object($payload['weightDimensions'] ?? null, OfferWeightDimensionsDTO::class),
            vendorCode: YandexMarketDtoValue::object($payload['vendorCode'] ?? null, OfferVendorCode::class),
            tags: YandexMarketDtoValue::object($payload['tags'] ?? null, BaseOfferTags::class),
            shelfLife: YandexMarketDtoValue::object($payload['shelfLife'] ?? null, TimePeriodDTO::class),
            lifeTime: YandexMarketDtoValue::object($payload['lifeTime'] ?? null, TimePeriodDTO::class),
            guaranteePeriod: YandexMarketDtoValue::object($payload['guaranteePeriod'] ?? null, TimePeriodDTO::class),
            customsCommodityCode: YandexMarketDtoValue::object($payload['customsCommodityCode'] ?? null, BaseOfferCustomsCommodityCode::class),
            commodityCodes: YandexMarketDtoValue::object($payload['commodityCodes'] ?? null, BaseOfferCommodityCodes::class),
            certificates: YandexMarketDtoValue::array($payload['certificates'] ?? null),
            boxCount: YandexMarketDtoValue::object($payload['boxCount'] ?? null, BaseOfferBoxCount::class),
            condition: YandexMarketDtoValue::object($payload['condition'] ?? null, OfferConditionDTO::class),
            type: YandexMarketDtoValue::object($payload['type'] ?? null, OfferType::class),
            downloadable: YandexMarketDtoValue::object($payload['downloadable'] ?? null, BaseOfferDownloadable::class),
            adult: YandexMarketDtoValue::object($payload['adult'] ?? null, BaseOfferAdult::class),
            age: YandexMarketDtoValue::object($payload['age'] ?? null, AgeDTO::class),
            params: YandexMarketDtoValue::object($payload['params'] ?? null, BaseOfferParams::class),
            extra: YandexMarketDtoValue::extra($payload, ['offerId', 'name', 'marketCategoryId', 'category', 'pictures', 'videos', 'manuals', 'vendor', 'barcodes', 'description', 'manufacturerCountries', 'weightDimensions', 'vendorCode', 'tags', 'shelfLife', 'lifeTime', 'guaranteePeriod', 'customsCommodityCode', 'commodityCodes', 'certificates', 'boxCount', 'condition', 'type', 'downloadable', 'adult', 'age', 'params']),
        );
    }
}
