<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsFeedback;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GoodsFeedbackDescriptionDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $advantages,
        public ?string $disadvantages,
        public ?string $comment,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            advantages: YandexMarketDtoValue::string($payload['advantages'] ?? null),
            disadvantages: YandexMarketDtoValue::string($payload['disadvantages'] ?? null),
            comment: YandexMarketDtoValue::string($payload['comment'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['advantages', 'disadvantages', 'comment']),
        );
    }
}
