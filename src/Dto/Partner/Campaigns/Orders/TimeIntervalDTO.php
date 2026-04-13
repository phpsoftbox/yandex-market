<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class TimeIntervalDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $fromTime,
        public ?string $toTime,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            fromTime: YandexMarketDtoValue::string($payload['fromTime'] ?? null),
            toTime: YandexMarketDtoValue::string($payload['toTime'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['fromTime', 'toTime']),
        );
    }
}
