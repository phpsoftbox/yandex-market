<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\RegionDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class BusinessOrderPickupDeliveryDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?BusinessOrderDeliveryAddressDTO $address,
        public ?RegionDTO $region,
        public ?LogisticPointId $logisticPointId,
        public ?string $outletCode,
        public ?string $outletStorageLimitDate,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            address: YandexMarketDtoValue::object($payload['address'] ?? null, BusinessOrderDeliveryAddressDTO::class),
            region: YandexMarketDtoValue::object($payload['region'] ?? null, RegionDTO::class),
            logisticPointId: YandexMarketDtoValue::object($payload['logisticPointId'] ?? null, LogisticPointId::class),
            outletCode: YandexMarketDtoValue::string($payload['outletCode'] ?? null),
            outletStorageLimitDate: YandexMarketDtoValue::string($payload['outletStorageLimitDate'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['address', 'region', 'logisticPointId', 'outletCode', 'outletStorageLimitDate']),
        );
    }
}
