<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class UinDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $value,
        public ?UinStatusType $status,
        public ?UinSubstatusType $substatus,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            value: YandexMarketDtoValue::string($payload['value'] ?? null),
            status: YandexMarketDtoValue::object($payload['status'] ?? null, UinStatusType::class),
            substatus: YandexMarketDtoValue::object($payload['substatus'] ?? null, UinSubstatusType::class),
            extra: YandexMarketDtoValue::extra($payload, ['value', 'status', 'substatus']),
        );
    }
}
