<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Promos;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class UpdatePromoOffersResultDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<RejectedPromoOfferUpdateDTO> $rejectedOffers
     * @param list<WarningPromoOfferUpdateDTO> $warningOffers
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $rejectedOffers,
        public array $warningOffers,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            rejectedOffers: YandexMarketDtoValue::objectList($payload['rejectedOffers'] ?? null, RejectedPromoOfferUpdateDTO::class),
            warningOffers: YandexMarketDtoValue::objectList($payload['warningOffers'] ?? null, WarningPromoOfferUpdateDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['rejectedOffers', 'warningOffers']),
        );
    }
}
