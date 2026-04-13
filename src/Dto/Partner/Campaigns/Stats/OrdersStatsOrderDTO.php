<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Stats;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Settings\CurrencyType;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrdersStatsOrderDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OrdersStatsItemDTO> $items
     * @param list<OrdersStatsItemDTO> $initialItems
     * @param list<OrdersStatsPaymentDTO> $payments
     * @param list<OrdersStatsCommissionDTO> $commissions
     * @param list<OrdersStatsSubsidyDTO> $subsidies
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?string $creationDate,
        public ?string $statusUpdateDate,
        public ?OrderStatsStatusType $status,
        public ?string $partnerOrderId,
        public ?OrdersStatsOrderPaymentType $paymentType,
        public ?bool $fake,
        public ?OrdersStatsDeliveryRegionDTO $deliveryRegion,
        public array $items,
        public array $initialItems,
        public array $payments,
        public array $commissions,
        public array $subsidies,
        public ?CurrencyType $currency,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            creationDate: YandexMarketDtoValue::string($payload['creationDate'] ?? null),
            statusUpdateDate: YandexMarketDtoValue::string($payload['statusUpdateDate'] ?? null),
            status: YandexMarketDtoValue::object($payload['status'] ?? null, OrderStatsStatusType::class),
            partnerOrderId: YandexMarketDtoValue::string($payload['partnerOrderId'] ?? null),
            paymentType: YandexMarketDtoValue::object($payload['paymentType'] ?? null, OrdersStatsOrderPaymentType::class),
            fake: YandexMarketDtoValue::bool($payload['fake'] ?? null),
            deliveryRegion: YandexMarketDtoValue::object($payload['deliveryRegion'] ?? null, OrdersStatsDeliveryRegionDTO::class),
            items: YandexMarketDtoValue::objectList($payload['items'] ?? null, OrdersStatsItemDTO::class),
            initialItems: YandexMarketDtoValue::objectList($payload['initialItems'] ?? null, OrdersStatsItemDTO::class),
            payments: YandexMarketDtoValue::objectList($payload['payments'] ?? null, OrdersStatsPaymentDTO::class),
            commissions: YandexMarketDtoValue::objectList($payload['commissions'] ?? null, OrdersStatsCommissionDTO::class),
            subsidies: YandexMarketDtoValue::objectList($payload['subsidies'] ?? null, OrdersStatsSubsidyDTO::class),
            currency: YandexMarketDtoValue::object($payload['currency'] ?? null, CurrencyType::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'creationDate', 'statusUpdateDate', 'status', 'partnerOrderId', 'paymentType', 'fake', 'deliveryRegion', 'items', 'initialItems', 'payments', 'commissions', 'subsidies', 'currency']),
        );
    }
}
