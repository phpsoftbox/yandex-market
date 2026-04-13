<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsFeedback;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GoodsFeedbackDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?GoodsFeedbackId $feedbackId,
        public ?string $createdAt,
        public ?bool $needReaction,
        public ?GoodsFeedbackIdentifiersDTO $identifiers,
        public ?string $author,
        public ?GoodsFeedbackDescriptionDTO $description,
        public ?GoodsFeedbackMediaDTO $media,
        public ?GoodsFeedbackStatisticsDTO $statistics,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            feedbackId: YandexMarketDtoValue::object($payload['feedbackId'] ?? null, GoodsFeedbackId::class),
            createdAt: YandexMarketDtoValue::string($payload['createdAt'] ?? null),
            needReaction: YandexMarketDtoValue::bool($payload['needReaction'] ?? null),
            identifiers: YandexMarketDtoValue::object($payload['identifiers'] ?? null, GoodsFeedbackIdentifiersDTO::class),
            author: YandexMarketDtoValue::string($payload['author'] ?? null),
            description: YandexMarketDtoValue::object($payload['description'] ?? null, GoodsFeedbackDescriptionDTO::class),
            media: YandexMarketDtoValue::object($payload['media'] ?? null, GoodsFeedbackMediaDTO::class),
            statistics: YandexMarketDtoValue::object($payload['statistics'] ?? null, GoodsFeedbackStatisticsDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['feedbackId', 'createdAt', 'needReaction', 'identifiers', 'author', 'description', 'media', 'statistics']),
        );
    }
}
