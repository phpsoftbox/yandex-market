<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\OrderDeliveryEacType;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class BusinessOrderEacDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?OrderDeliveryEacType $eacType,
        public ?string $eacCode,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            eacType: YandexMarketDtoValue::object($payload['eacType'] ?? null, OrderDeliveryEacType::class),
            eacCode: YandexMarketDtoValue::string($payload['eacCode'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['eacType', 'eacCode']),
        );
    }
}
