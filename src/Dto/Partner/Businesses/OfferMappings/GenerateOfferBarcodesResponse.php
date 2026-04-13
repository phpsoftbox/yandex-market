<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GenerateOfferBarcodesResponse implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?GenerateOfferBarcodesResultDTO $result,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            result: YandexMarketDtoValue::object($payload['result'] ?? null, GenerateOfferBarcodesResultDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['result']),
        );
    }
}
