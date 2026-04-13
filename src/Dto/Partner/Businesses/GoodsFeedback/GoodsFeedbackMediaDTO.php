<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsFeedback;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GoodsFeedbackMediaDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<string> $photos
     * @param list<string> $videos
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $photos,
        public array $videos,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            photos: YandexMarketDtoValue::array($payload['photos'] ?? null),
            videos: YandexMarketDtoValue::array($payload['videos'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['photos', 'videos']),
        );
    }
}
