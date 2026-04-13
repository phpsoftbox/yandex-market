<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\PackagingForwardScrollingPagerDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetOfferMappingsResultDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<GetOfferMappingDTO> $offerMappings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PackagingForwardScrollingPagerDTO $paging,
        public array $offerMappings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            paging: YandexMarketDtoValue::object($payload['paging'] ?? null, PackagingForwardScrollingPagerDTO::class),
            offerMappings: YandexMarketDtoValue::objectList($payload['offerMappings'] ?? null, GetOfferMappingDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['paging', 'offerMappings']),
        );
    }
}
