<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Offers;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OfferRecommendationInfoDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ShopSku $offerId,
        public ?PriceCompetitivenessThresholdsDTO $competitivenessThresholds,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offerId: YandexMarketDtoValue::object($payload['offerId'] ?? null, ShopSku::class),
            competitivenessThresholds: YandexMarketDtoValue::object($payload['competitivenessThresholds'] ?? null, PriceCompetitivenessThresholdsDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['offerId', 'competitivenessThresholds']),
        );
    }
}
