<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Returns;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders\CurrencyValueDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ReturnDecisionDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<string> $images
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $returnItemId,
        public ?int $count,
        public ?string $comment,
        public ?ReturnDecisionReasonType $reasonType,
        public ?ReturnDecisionSubreasonType $subreasonType,
        public ?ReturnDecisionType $decisionType,
        public ?int $refundAmount,
        public ?CurrencyValueDTO $amount,
        public ?int $partnerCompensation,
        public ?CurrencyValueDTO $partnerCompensationAmount,
        public array $images,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            returnItemId: YandexMarketDtoValue::int($payload['returnItemId'] ?? null),
            count: YandexMarketDtoValue::int($payload['count'] ?? null),
            comment: YandexMarketDtoValue::string($payload['comment'] ?? null),
            reasonType: YandexMarketDtoValue::object($payload['reasonType'] ?? null, ReturnDecisionReasonType::class),
            subreasonType: YandexMarketDtoValue::object($payload['subreasonType'] ?? null, ReturnDecisionSubreasonType::class),
            decisionType: YandexMarketDtoValue::object($payload['decisionType'] ?? null, ReturnDecisionType::class),
            refundAmount: YandexMarketDtoValue::int($payload['refundAmount'] ?? null),
            amount: YandexMarketDtoValue::object($payload['amount'] ?? null, CurrencyValueDTO::class),
            partnerCompensation: YandexMarketDtoValue::int($payload['partnerCompensation'] ?? null),
            partnerCompensationAmount: YandexMarketDtoValue::object($payload['partnerCompensationAmount'] ?? null, CurrencyValueDTO::class),
            images: YandexMarketDtoValue::array($payload['images'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['returnItemId', 'count', 'comment', 'reasonType', 'subreasonType', 'decisionType', 'refundAmount', 'amount', 'partnerCompensation', 'partnerCompensationAmount', 'images']),
        );
    }
}
