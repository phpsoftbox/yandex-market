<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsFeedback;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GoodsFeedbackCommentAuthorDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?GoodsFeedbackCommentAuthorType $type,
        public ?string $name,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            type: YandexMarketDtoValue::object($payload['type'] ?? null, GoodsFeedbackCommentAuthorType::class),
            name: YandexMarketDtoValue::string($payload['name'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['type', 'name']),
        );
    }
}
