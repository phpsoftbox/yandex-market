<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class DeliveryDateIntervalDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $fromDate,
        public ?string $toDate,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            fromDate: YandexMarketDtoValue::string($payload['fromDate'] ?? null),
            toDate: YandexMarketDtoValue::string($payload['toDate'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['fromDate', 'toDate']),
        );
    }
}
