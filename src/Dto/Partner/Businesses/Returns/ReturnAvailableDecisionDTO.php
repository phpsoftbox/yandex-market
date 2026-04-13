<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Returns;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Returns\ReturnDecisionType;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ReturnAvailableDecisionDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<ReturnRequestDecisionReasonType> $decisionReasonTypes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ReturnDecisionType $decisionType,
        public array $decisionReasonTypes,
        public ?PartialCompensationBoundsDTO $partialCompensationBounds,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            decisionType: YandexMarketDtoValue::object($payload['decisionType'] ?? null, ReturnDecisionType::class),
            decisionReasonTypes: YandexMarketDtoValue::objectList($payload['decisionReasonTypes'] ?? null, ReturnRequestDecisionReasonType::class),
            partialCompensationBounds: YandexMarketDtoValue::object($payload['partialCompensationBounds'] ?? null, PartialCompensationBoundsDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['decisionType', 'decisionReasonTypes', 'partialCompensationBounds']),
        );
    }
}
