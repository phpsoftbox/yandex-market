<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders\SellingProgramType;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OfferSellingProgramDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?SellingProgramType $sellingProgram,
        public ?OfferSellingProgramStatusType $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            sellingProgram: YandexMarketDtoValue::object($payload['sellingProgram'] ?? null, SellingProgramType::class),
            status: YandexMarketDtoValue::object($payload['status'] ?? null, OfferSellingProgramStatusType::class),
            extra: YandexMarketDtoValue::extra($payload, ['sellingProgram', 'status']),
        );
    }
}
