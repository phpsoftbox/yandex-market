<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetOfferMappingDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<ShowcaseUrlDTO> $showcaseUrls
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?GetOfferDTO $offer,
        public ?GetMappingDTO $mapping,
        public array $showcaseUrls,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offer: YandexMarketDtoValue::object($payload['offer'] ?? null, GetOfferDTO::class),
            mapping: YandexMarketDtoValue::object($payload['mapping'] ?? null, GetMappingDTO::class),
            showcaseUrls: YandexMarketDtoValue::objectList($payload['showcaseUrls'] ?? null, ShowcaseUrlDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['offer', 'mapping', 'showcaseUrls']),
        );
    }
}
