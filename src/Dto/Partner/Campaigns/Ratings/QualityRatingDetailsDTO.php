<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Ratings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class QualityRatingDetailsDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<QualityRatingAffectedOrderDTO> $affectedOrders
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $affectedOrders,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            affectedOrders: YandexMarketDtoValue::objectList($payload['affectedOrders'] ?? null, QualityRatingAffectedOrderDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['affectedOrders']),
        );
    }
}
