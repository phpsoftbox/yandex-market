<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsQuestions;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class AnswerDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<CommentDTO> $comments
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?AnswerId $id,
        public ?QuestionsTextContent $text,
        public ?bool $canModify,
        public ?QuestionsTextContentAuthorDTO $author,
        public ?QuestionsTextContentModerationStatusType $status,
        public ?QuestionId $questionId,
        public ?string $createdAt,
        public ?VotesDTO $votes,
        public array $comments,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::object($payload['id'] ?? null, AnswerId::class),
            text: YandexMarketDtoValue::object($payload['text'] ?? null, QuestionsTextContent::class),
            canModify: YandexMarketDtoValue::bool($payload['canModify'] ?? null),
            author: YandexMarketDtoValue::object($payload['author'] ?? null, QuestionsTextContentAuthorDTO::class),
            status: YandexMarketDtoValue::object($payload['status'] ?? null, QuestionsTextContentModerationStatusType::class),
            questionId: YandexMarketDtoValue::object($payload['questionId'] ?? null, QuestionId::class),
            createdAt: YandexMarketDtoValue::string($payload['createdAt'] ?? null),
            votes: YandexMarketDtoValue::object($payload['votes'] ?? null, VotesDTO::class),
            comments: YandexMarketDtoValue::objectList($payload['comments'] ?? null, CommentDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'text', 'canModify', 'author', 'status', 'questionId', 'createdAt', 'votes', 'comments']),
        );
    }
}
