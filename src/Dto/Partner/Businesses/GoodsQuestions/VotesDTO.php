<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsQuestions;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class VotesDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $likes,
        public ?int $dislikes,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            likes: YandexMarketDtoValue::int($payload['likes'] ?? null),
            dislikes: YandexMarketDtoValue::int($payload['dislikes'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['likes', 'dislikes']),
        );
    }
}
