<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Returns;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class PartialCompensationBoundsDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?BasePriceDTO $minAmount,
        public ?BasePriceDTO $maxAmount,
        public ?int $maxPercent,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            minAmount: YandexMarketDtoValue::object($payload['minAmount'] ?? null, BasePriceDTO::class),
            maxAmount: YandexMarketDtoValue::object($payload['maxAmount'] ?? null, BasePriceDTO::class),
            maxPercent: YandexMarketDtoValue::int($payload['maxPercent'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['minAmount', 'maxAmount', 'maxPercent']),
        );
    }
}
