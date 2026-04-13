<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Bids;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class BidRecommendationItemDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<BenefitType> $benefits
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?Bid $bid,
        public ?int $showPercent,
        public array $benefits,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            bid: YandexMarketDtoValue::object($payload['bid'] ?? null, Bid::class),
            showPercent: YandexMarketDtoValue::int($payload['showPercent'] ?? null),
            benefits: YandexMarketDtoValue::objectList($payload['benefits'] ?? null, BenefitType::class),
            extra: YandexMarketDtoValue::extra($payload, ['bid', 'showPercent', 'benefits']),
        );
    }
}
