<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferCards;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings\GetMappingDTO;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings\OfferCardStatusType;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Offers\OfferErrorDTO;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OfferCardDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<ParameterValueDTO> $parameterValues
     * @param list<OfferCardRecommendationDTO> $recommendations
     * @param list<OfferErrorDTO> $errors
     * @param list<OfferErrorDTO> $warnings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ShopSku $offerId,
        public ?GetMappingDTO $mapping,
        public array $parameterValues,
        public ?OfferCardStatusType $cardStatus,
        public ?int $contentRating,
        public ?int $averageContentRating,
        public ?OfferCardContentStatusType $contentRatingStatus,
        public array $recommendations,
        public ?string $groupId,
        public array $errors,
        public array $warnings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offerId: YandexMarketDtoValue::object($payload['offerId'] ?? null, ShopSku::class),
            mapping: YandexMarketDtoValue::object($payload['mapping'] ?? null, GetMappingDTO::class),
            parameterValues: YandexMarketDtoValue::objectList($payload['parameterValues'] ?? null, ParameterValueDTO::class),
            cardStatus: YandexMarketDtoValue::object($payload['cardStatus'] ?? null, OfferCardStatusType::class),
            contentRating: YandexMarketDtoValue::int($payload['contentRating'] ?? null),
            averageContentRating: YandexMarketDtoValue::int($payload['averageContentRating'] ?? null),
            contentRatingStatus: YandexMarketDtoValue::object($payload['contentRatingStatus'] ?? null, OfferCardContentStatusType::class),
            recommendations: YandexMarketDtoValue::objectList($payload['recommendations'] ?? null, OfferCardRecommendationDTO::class),
            groupId: YandexMarketDtoValue::string($payload['groupId'] ?? null),
            errors: YandexMarketDtoValue::objectList($payload['errors'] ?? null, OfferErrorDTO::class),
            warnings: YandexMarketDtoValue::objectList($payload['warnings'] ?? null, OfferErrorDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['offerId', 'mapping', 'parameterValues', 'cardStatus', 'contentRating', 'averageContentRating', 'contentRatingStatus', 'recommendations', 'groupId', 'errors', 'warnings']),
        );
    }
}
