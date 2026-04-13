<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Offers;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\PackagingForwardScrollingPagerDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OfferRecommendationsResultDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OfferRecommendationDTO> $offerRecommendations
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PackagingForwardScrollingPagerDTO $paging,
        public array $offerRecommendations,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            paging: YandexMarketDtoValue::object($payload['paging'] ?? null, PackagingForwardScrollingPagerDTO::class),
            offerRecommendations: YandexMarketDtoValue::objectList($payload['offerRecommendations'] ?? null, OfferRecommendationDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['paging', 'offerRecommendations']),
        );
    }
}
