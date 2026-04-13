<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Promos;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetPromoAssortmentInfoDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $activeOffers,
        public ?int $potentialOffers,
        public ?bool $processing,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            activeOffers: YandexMarketDtoValue::int($payload['activeOffers'] ?? null),
            potentialOffers: YandexMarketDtoValue::int($payload['potentialOffers'] ?? null),
            processing: YandexMarketDtoValue::bool($payload['processing'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['activeOffers', 'potentialOffers', 'processing']),
        );
    }
}
