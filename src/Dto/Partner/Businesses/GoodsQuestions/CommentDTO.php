<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsQuestions;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CommentDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?CommentId $id,
        public ?QuestionsTextContent $text,
        public ?bool $canModify,
        public ?CommentId $parentId,
        public ?QuestionsTextContentAuthorDTO $author,
        public ?QuestionsTextContentModerationStatusType $status,
        public ?AnswerId $answerId,
        public ?string $createdAt,
        public ?VotesDTO $votes,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::object($payload['id'] ?? null, CommentId::class),
            text: YandexMarketDtoValue::object($payload['text'] ?? null, QuestionsTextContent::class),
            canModify: YandexMarketDtoValue::bool($payload['canModify'] ?? null),
            parentId: YandexMarketDtoValue::object($payload['parentId'] ?? null, CommentId::class),
            author: YandexMarketDtoValue::object($payload['author'] ?? null, QuestionsTextContentAuthorDTO::class),
            status: YandexMarketDtoValue::object($payload['status'] ?? null, QuestionsTextContentModerationStatusType::class),
            answerId: YandexMarketDtoValue::object($payload['answerId'] ?? null, AnswerId::class),
            createdAt: YandexMarketDtoValue::string($payload['createdAt'] ?? null),
            votes: YandexMarketDtoValue::object($payload['votes'] ?? null, VotesDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'text', 'canModify', 'parentId', 'author', 'status', 'answerId', 'createdAt', 'votes']),
        );
    }
}
