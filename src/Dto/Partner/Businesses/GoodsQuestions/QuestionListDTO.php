<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsQuestions;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\PackagingForwardScrollingPagerDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class QuestionListDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<QuestionDTO> $questions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $questions,
        public ?PackagingForwardScrollingPagerDTO $paging,
        public ?int $totalCount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            questions: YandexMarketDtoValue::objectList($payload['questions'] ?? null, QuestionDTO::class),
            paging: YandexMarketDtoValue::object($payload['paging'] ?? null, PackagingForwardScrollingPagerDTO::class),
            totalCount: YandexMarketDtoValue::int($payload['totalCount'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['questions', 'paging', 'totalCount']),
        );
    }
}
