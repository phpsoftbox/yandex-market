<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Offers;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class TurnoverDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?TurnoverType $turnover,
        public ?float $turnoverDays,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            turnover: YandexMarketDtoValue::object($payload['turnover'] ?? null, TurnoverType::class),
            turnoverDays: YandexMarketDtoValue::float($payload['turnoverDays'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['turnover', 'turnoverDays']),
        );
    }
}
