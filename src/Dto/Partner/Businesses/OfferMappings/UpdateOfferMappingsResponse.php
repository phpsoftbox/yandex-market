<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class UpdateOfferMappingsResponse implements YandexMarketDtoInterface
{
    /**
     * @param list<UpdateOfferMappingResultDTO> $results
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $results,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            results: YandexMarketDtoValue::objectList($payload['results'] ?? null, UpdateOfferMappingResultDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['results']),
        );
    }
}
