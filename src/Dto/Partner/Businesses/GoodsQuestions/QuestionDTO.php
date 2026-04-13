<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsQuestions;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Settings\BusinessId;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class QuestionDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?QuestionIdentifiersDTO $questionIdentifiers,
        public ?BusinessId $businessId,
        public ?QuestionsTextContent $text,
        public ?string $createdAt,
        public ?VotesDTO $votes,
        public ?QuestionsTextContentAuthorDTO $author,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            questionIdentifiers: YandexMarketDtoValue::object($payload['questionIdentifiers'] ?? null, QuestionIdentifiersDTO::class),
            businessId: YandexMarketDtoValue::object($payload['businessId'] ?? null, BusinessId::class),
            text: YandexMarketDtoValue::object($payload['text'] ?? null, QuestionsTextContent::class),
            createdAt: YandexMarketDtoValue::string($payload['createdAt'] ?? null),
            votes: YandexMarketDtoValue::object($payload['votes'] ?? null, VotesDTO::class),
            author: YandexMarketDtoValue::object($payload['author'] ?? null, QuestionsTextContentAuthorDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['questionIdentifiers', 'businessId', 'text', 'createdAt', 'votes', 'author']),
        );
    }
}
