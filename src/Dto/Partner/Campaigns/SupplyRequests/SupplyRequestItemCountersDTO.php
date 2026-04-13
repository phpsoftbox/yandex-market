<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\SupplyRequests;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class SupplyRequestItemCountersDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $planCount,
        public ?int $factCount,
        public ?int $surplusCount,
        public ?int $shortageCount,
        public ?int $defectCount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            planCount: YandexMarketDtoValue::int($payload['planCount'] ?? null),
            factCount: YandexMarketDtoValue::int($payload['factCount'] ?? null),
            surplusCount: YandexMarketDtoValue::int($payload['surplusCount'] ?? null),
            shortageCount: YandexMarketDtoValue::int($payload['shortageCount'] ?? null),
            defectCount: YandexMarketDtoValue::int($payload['defectCount'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['planCount', 'factCount', 'surplusCount', 'shortageCount', 'defectCount']),
        );
    }
}
