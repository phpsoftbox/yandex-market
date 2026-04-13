<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Settings\CurrencyType;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OrderItemDTO> $items
     * @param list<OrderSubsidyDTO> $subsidies
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?ExternalOrderId $externalOrderId,
        public ?OrderStatusType $status,
        public ?OrderSubstatusType $substatus,
        public ?DateDdMmYyyyHhMmSs $creationDate,
        public ?DateDdMmYyyyHhMmSs $updatedAt,
        public ?CurrencyType $currency,
        public ?float $itemsTotal,
        public ?float $deliveryTotal,
        public ?float $buyerItemsTotal,
        public ?float $buyerTotal,
        public ?float $buyerItemsTotalBeforeDiscount,
        public ?float $buyerTotalBeforeDiscount,
        public ?OrderPaymentType $paymentType,
        public ?OrderPaymentMethodType $paymentMethod,
        public ?bool $fake,
        public array $items,
        public array $subsidies,
        public ?OrderDeliveryDTO $delivery,
        public ?OrderBuyerDTO $buyer,
        public ?string $notes,
        public ?OrderTaxSystemType $taxSystem,
        public ?bool $cancelRequested,
        public ?DateDdMmYyyyHhMmSs $expiryDate,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            externalOrderId: YandexMarketDtoValue::object($payload['externalOrderId'] ?? null, ExternalOrderId::class),
            status: YandexMarketDtoValue::object($payload['status'] ?? null, OrderStatusType::class),
            substatus: YandexMarketDtoValue::object($payload['substatus'] ?? null, OrderSubstatusType::class),
            creationDate: YandexMarketDtoValue::object($payload['creationDate'] ?? null, DateDdMmYyyyHhMmSs::class),
            updatedAt: YandexMarketDtoValue::object($payload['updatedAt'] ?? null, DateDdMmYyyyHhMmSs::class),
            currency: YandexMarketDtoValue::object($payload['currency'] ?? null, CurrencyType::class),
            itemsTotal: YandexMarketDtoValue::float($payload['itemsTotal'] ?? null),
            deliveryTotal: YandexMarketDtoValue::float($payload['deliveryTotal'] ?? null),
            buyerItemsTotal: YandexMarketDtoValue::float($payload['buyerItemsTotal'] ?? null),
            buyerTotal: YandexMarketDtoValue::float($payload['buyerTotal'] ?? null),
            buyerItemsTotalBeforeDiscount: YandexMarketDtoValue::float($payload['buyerItemsTotalBeforeDiscount'] ?? null),
            buyerTotalBeforeDiscount: YandexMarketDtoValue::float($payload['buyerTotalBeforeDiscount'] ?? null),
            paymentType: YandexMarketDtoValue::object($payload['paymentType'] ?? null, OrderPaymentType::class),
            paymentMethod: YandexMarketDtoValue::object($payload['paymentMethod'] ?? null, OrderPaymentMethodType::class),
            fake: YandexMarketDtoValue::bool($payload['fake'] ?? null),
            items: YandexMarketDtoValue::objectList($payload['items'] ?? null, OrderItemDTO::class),
            subsidies: YandexMarketDtoValue::objectList($payload['subsidies'] ?? null, OrderSubsidyDTO::class),
            delivery: YandexMarketDtoValue::object($payload['delivery'] ?? null, OrderDeliveryDTO::class),
            buyer: YandexMarketDtoValue::object($payload['buyer'] ?? null, OrderBuyerDTO::class),
            notes: YandexMarketDtoValue::string($payload['notes'] ?? null),
            taxSystem: YandexMarketDtoValue::object($payload['taxSystem'] ?? null, OrderTaxSystemType::class),
            cancelRequested: YandexMarketDtoValue::bool($payload['cancelRequested'] ?? null),
            expiryDate: YandexMarketDtoValue::object($payload['expiryDate'] ?? null, DateDdMmYyyyHhMmSs::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'externalOrderId', 'status', 'substatus', 'creationDate', 'updatedAt', 'currency', 'itemsTotal', 'deliveryTotal', 'buyerItemsTotal', 'buyerTotal', 'buyerItemsTotalBeforeDiscount', 'buyerTotalBeforeDiscount', 'paymentType', 'paymentMethod', 'fake', 'items', 'subsidies', 'delivery', 'buyer', 'notes', 'taxSystem', 'cancelRequested', 'expiryDate']),
        );
    }
}
