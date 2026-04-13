<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OfferMediaFilesDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OfferMediaFileDTO> $videos
     * @param list<OfferMediaFileDTO> $pictures
     * @param list<OfferMediaFileDTO> $manuals
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $firstVideoAsCover,
        public array $videos,
        public array $pictures,
        public array $manuals,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            firstVideoAsCover: YandexMarketDtoValue::bool($payload['firstVideoAsCover'] ?? null),
            videos: YandexMarketDtoValue::objectList($payload['videos'] ?? null, OfferMediaFileDTO::class),
            pictures: YandexMarketDtoValue::objectList($payload['pictures'] ?? null, OfferMediaFileDTO::class),
            manuals: YandexMarketDtoValue::objectList($payload['manuals'] ?? null, OfferMediaFileDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['firstVideoAsCover', 'videos', 'pictures', 'manuals']),
        );
    }
}
