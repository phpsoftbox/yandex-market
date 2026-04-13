<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsFeedback;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GoodsFeedbackCommentDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?GoodsFeedbackCommentId $id,
        public ?GoodsFeedbackCommentText $text,
        public ?bool $canModify,
        public ?int $parentId,
        public ?GoodsFeedbackCommentAuthorDTO $author,
        public ?GoodsFeedbackCommentStatusType $status,
        public ?GoodsFeedbackId $feedbackId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::object($payload['id'] ?? null, GoodsFeedbackCommentId::class),
            text: YandexMarketDtoValue::object($payload['text'] ?? null, GoodsFeedbackCommentText::class),
            canModify: YandexMarketDtoValue::bool($payload['canModify'] ?? null),
            parentId: YandexMarketDtoValue::int($payload['parentId'] ?? null),
            author: YandexMarketDtoValue::object($payload['author'] ?? null, GoodsFeedbackCommentAuthorDTO::class),
            status: YandexMarketDtoValue::object($payload['status'] ?? null, GoodsFeedbackCommentStatusType::class),
            feedbackId: YandexMarketDtoValue::object($payload['feedbackId'] ?? null, GoodsFeedbackId::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'text', 'canModify', 'parentId', 'author', 'status', 'feedbackId']),
        );
    }
}
