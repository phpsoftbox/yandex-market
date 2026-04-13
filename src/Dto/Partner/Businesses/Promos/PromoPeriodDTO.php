<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Promos;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class PromoPeriodDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $dateTimeFrom,
        public ?string $dateTimeTo,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            dateTimeFrom: YandexMarketDtoValue::string($payload['dateTimeFrom'] ?? null),
            dateTimeTo: YandexMarketDtoValue::string($payload['dateTimeTo'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['dateTimeFrom', 'dateTimeTo']),
        );
    }
}
