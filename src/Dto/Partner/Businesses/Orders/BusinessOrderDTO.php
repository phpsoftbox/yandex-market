<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\CampaignId;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ExternalOrderId;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\OrderBuyerType;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\OrderPaymentMethodType;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\OrderPaymentType;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\OrderStatusType;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\OrderSubstatusType;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class BusinessOrderDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<BusinessOrderItemDTO> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $orderId,
        public ?CampaignId $campaignId,
        public ?SellingProgramType $programType,
        public ?ExternalOrderId $externalOrderId,
        public ?OrderStatusType $status,
        public ?OrderSubstatusType $substatus,
        public ?string $creationDate,
        public ?string $updateDate,
        public ?OrderPaymentType $paymentType,
        public ?OrderPaymentMethodType $paymentMethod,
        public ?bool $fake,
        public array $items,
        public ?OrderPriceDTO $prices,
        public ?BusinessOrderDeliveryDTO $delivery,
        public ?BusinessOrderServicesDTO $services,
        public ?OrderBuyerType $buyerType,
        public ?string $notes,
        public ?bool $cancelRequested,
        public ?OrderSourcePlatformType $sourcePlatform,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            orderId: YandexMarketDtoValue::int($payload['orderId'] ?? null),
            campaignId: YandexMarketDtoValue::object($payload['campaignId'] ?? null, CampaignId::class),
            programType: YandexMarketDtoValue::object($payload['programType'] ?? null, SellingProgramType::class),
            externalOrderId: YandexMarketDtoValue::object($payload['externalOrderId'] ?? null, ExternalOrderId::class),
            status: YandexMarketDtoValue::object($payload['status'] ?? null, OrderStatusType::class),
            substatus: YandexMarketDtoValue::object($payload['substatus'] ?? null, OrderSubstatusType::class),
            creationDate: YandexMarketDtoValue::string($payload['creationDate'] ?? null),
            updateDate: YandexMarketDtoValue::string($payload['updateDate'] ?? null),
            paymentType: YandexMarketDtoValue::object($payload['paymentType'] ?? null, OrderPaymentType::class),
            paymentMethod: YandexMarketDtoValue::object($payload['paymentMethod'] ?? null, OrderPaymentMethodType::class),
            fake: YandexMarketDtoValue::bool($payload['fake'] ?? null),
            items: YandexMarketDtoValue::objectList($payload['items'] ?? null, BusinessOrderItemDTO::class),
            prices: YandexMarketDtoValue::object($payload['prices'] ?? null, OrderPriceDTO::class),
            delivery: YandexMarketDtoValue::object($payload['delivery'] ?? null, BusinessOrderDeliveryDTO::class),
            services: YandexMarketDtoValue::object($payload['services'] ?? null, BusinessOrderServicesDTO::class),
            buyerType: YandexMarketDtoValue::object($payload['buyerType'] ?? null, OrderBuyerType::class),
            notes: YandexMarketDtoValue::string($payload['notes'] ?? null),
            cancelRequested: YandexMarketDtoValue::bool($payload['cancelRequested'] ?? null),
            sourcePlatform: YandexMarketDtoValue::object($payload['sourcePlatform'] ?? null, OrderSourcePlatformType::class),
            extra: YandexMarketDtoValue::extra($payload, ['orderId', 'campaignId', 'programType', 'externalOrderId', 'status', 'substatus', 'creationDate', 'updateDate', 'paymentType', 'paymentMethod', 'fake', 'items', 'prices', 'delivery', 'services', 'buyerType', 'notes', 'cancelRequested', 'sourcePlatform']),
        );
    }
}
