<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CisDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $value,
        public ?CisStatusType $status,
        public ?CisSubstatusType $substatus,
        public ?string $crptRequestId,
        public ?string $crptRequestDateTime,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            value: YandexMarketDtoValue::string($payload['value'] ?? null),
            status: YandexMarketDtoValue::object($payload['status'] ?? null, CisStatusType::class),
            substatus: YandexMarketDtoValue::object($payload['substatus'] ?? null, CisSubstatusType::class),
            crptRequestId: YandexMarketDtoValue::string($payload['crptRequestId'] ?? null),
            crptRequestDateTime: YandexMarketDtoValue::string($payload['crptRequestDateTime'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['value', 'status', 'substatus', 'crptRequestId', 'crptRequestDateTime']),
        );
    }
}
