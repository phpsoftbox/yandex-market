<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsFeedback;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GoodsFeedbackStatisticsDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $rating,
        public ?int $commentsCount,
        public ?bool $recommended,
        public ?int $paidAmount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            rating: YandexMarketDtoValue::int($payload['rating'] ?? null),
            commentsCount: YandexMarketDtoValue::int($payload['commentsCount'] ?? null),
            recommended: YandexMarketDtoValue::bool($payload['recommended'] ?? null),
            paidAmount: YandexMarketDtoValue::int($payload['paidAmount'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['rating', 'commentsCount', 'recommended', 'paidAmount']),
        );
    }
}
