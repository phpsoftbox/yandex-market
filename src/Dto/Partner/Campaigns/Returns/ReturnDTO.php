<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Returns;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders\CurrencyValueDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ReturnDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<ReturnItemDTO> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?int $orderId,
        public ?string $creationDate,
        public ?string $updateDate,
        public ?RefundStatusType $refundStatus,
        public ?LogisticPickupPointDTO $logisticPickupPoint,
        public ?string $pickupTillDate,
        public ?RecipientType $shipmentRecipientType,
        public ?ReturnShipmentStatusType $shipmentStatus,
        public ?int $refundAmount,
        public ?CurrencyValueDTO $amount,
        public array $items,
        public ?ReturnType $returnType,
        public ?bool $fastReturn,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            orderId: YandexMarketDtoValue::int($payload['orderId'] ?? null),
            creationDate: YandexMarketDtoValue::string($payload['creationDate'] ?? null),
            updateDate: YandexMarketDtoValue::string($payload['updateDate'] ?? null),
            refundStatus: YandexMarketDtoValue::object($payload['refundStatus'] ?? null, RefundStatusType::class),
            logisticPickupPoint: YandexMarketDtoValue::object($payload['logisticPickupPoint'] ?? null, LogisticPickupPointDTO::class),
            pickupTillDate: YandexMarketDtoValue::string($payload['pickupTillDate'] ?? null),
            shipmentRecipientType: YandexMarketDtoValue::object($payload['shipmentRecipientType'] ?? null, RecipientType::class),
            shipmentStatus: YandexMarketDtoValue::object($payload['shipmentStatus'] ?? null, ReturnShipmentStatusType::class),
            refundAmount: YandexMarketDtoValue::int($payload['refundAmount'] ?? null),
            amount: YandexMarketDtoValue::object($payload['amount'] ?? null, CurrencyValueDTO::class),
            items: YandexMarketDtoValue::objectList($payload['items'] ?? null, ReturnItemDTO::class),
            returnType: YandexMarketDtoValue::object($payload['returnType'] ?? null, ReturnType::class),
            fastReturn: YandexMarketDtoValue::bool($payload['fastReturn'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'orderId', 'creationDate', 'updateDate', 'refundStatus', 'logisticPickupPoint', 'pickupTillDate', 'shipmentRecipientType', 'shipmentStatus', 'refundAmount', 'amount', 'items', 'returnType', 'fastReturn']),
        );
    }
}
