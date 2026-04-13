<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderPriceDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?CurrencyValueDTO $payment,
        public ?CurrencyValueDTO $subsidy,
        public ?CurrencyValueDTO $cashback,
        public ?DeliveryPriceDTO $delivery,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            payment: YandexMarketDtoValue::object($payload['payment'] ?? null, CurrencyValueDTO::class),
            subsidy: YandexMarketDtoValue::object($payload['subsidy'] ?? null, CurrencyValueDTO::class),
            cashback: YandexMarketDtoValue::object($payload['cashback'] ?? null, CurrencyValueDTO::class),
            delivery: YandexMarketDtoValue::object($payload['delivery'] ?? null, DeliveryPriceDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['payment', 'subsidy', 'cashback', 'delivery']),
        );
    }
}
