<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsQuestions;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class QuestionIdentifiersDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?QuestionId $id,
        public ?int $categoryId,
        public ?ShopSku $offerId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::object($payload['id'] ?? null, QuestionId::class),
            categoryId: YandexMarketDtoValue::int($payload['categoryId'] ?? null),
            offerId: YandexMarketDtoValue::object($payload['offerId'] ?? null, ShopSku::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'categoryId', 'offerId']),
        );
    }
}
