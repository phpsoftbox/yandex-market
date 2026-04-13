<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\LogisticsPoints;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class LogisticPointDeliveryRestrictionDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?LogisticPointDimensionRestrictionsDTO $dimensionsRestrictions,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            dimensionsRestrictions: YandexMarketDtoValue::object($payload['dimensionsRestrictions'] ?? null, LogisticPointDimensionRestrictionsDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['dimensionsRestrictions']),
        );
    }
}
