<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\OrderVatType;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class DeliveryPriceDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?CurrencyValueDTO $payment,
        public ?CurrencyValueDTO $subsidy,
        public ?OrderVatType $vat,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            payment: YandexMarketDtoValue::object($payload['payment'] ?? null, CurrencyValueDTO::class),
            subsidy: YandexMarketDtoValue::object($payload['subsidy'] ?? null, CurrencyValueDTO::class),
            vat: YandexMarketDtoValue::object($payload['vat'] ?? null, OrderVatType::class),
            extra: YandexMarketDtoValue::extra($payload, ['payment', 'subsidy', 'vat']),
        );
    }
}
