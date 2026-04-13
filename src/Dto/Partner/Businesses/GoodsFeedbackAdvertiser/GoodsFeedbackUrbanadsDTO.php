<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsFeedbackAdvertiser;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsFeedback\GoodsFeedbackDescriptionDTO;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsFeedback\GoodsFeedbackId;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsFeedback\GoodsFeedbackMediaDTO;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsFeedback\GoodsFeedbackStatisticsDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GoodsFeedbackUrbanadsDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?GoodsFeedbackId $feedbackId,
        public ?string $createdAt,
        public ?bool $needReaction,
        public ?GoodsFeedbackContextUrbanadsDTO $context,
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
            context: YandexMarketDtoValue::object($payload['context'] ?? null, GoodsFeedbackContextUrbanadsDTO::class),
            author: YandexMarketDtoValue::string($payload['author'] ?? null),
            description: YandexMarketDtoValue::object($payload['description'] ?? null, GoodsFeedbackDescriptionDTO::class),
            media: YandexMarketDtoValue::object($payload['media'] ?? null, GoodsFeedbackMediaDTO::class),
            statistics: YandexMarketDtoValue::object($payload['statistics'] ?? null, GoodsFeedbackStatisticsDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['feedbackId', 'createdAt', 'needReaction', 'context', 'author', 'description', 'media', 'statistics']),
        );
    }
}
