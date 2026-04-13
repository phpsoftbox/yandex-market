<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class AddOffersToArchiveDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<AddOffersToArchiveErrorDTO> $notArchivedOffers
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $notArchivedOffers,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            notArchivedOffers: YandexMarketDtoValue::objectList($payload['notArchivedOffers'] ?? null, AddOffersToArchiveErrorDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['notArchivedOffers']),
        );
    }
}
