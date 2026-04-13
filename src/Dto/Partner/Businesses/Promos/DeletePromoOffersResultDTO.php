<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Promos;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class DeletePromoOffersResultDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<RejectedPromoOfferDeleteDTO> $rejectedOffers
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $rejectedOffers,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            rejectedOffers: YandexMarketDtoValue::objectList($payload['rejectedOffers'] ?? null, RejectedPromoOfferDeleteDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['rejectedOffers']),
        );
    }
}
