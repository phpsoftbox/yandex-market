<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\LogisticsPoints;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders\LogisticPointId;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class LogisticPointDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<LogisticPointFeatureType> $features
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?LogisticPointId $logisticPointId,
        public ?LogisticPointBrandType $brand,
        public ?LogisticPointAddressDTO $address,
        public ?LogisticPointScheduleDTO $workingSchedule,
        public ?LogisticPointDeliveryRestrictionDTO $deliveryRestrictions,
        public array $features,
        public ?int $storagePeriod,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            logisticPointId: YandexMarketDtoValue::object($payload['logisticPointId'] ?? null, LogisticPointId::class),
            brand: YandexMarketDtoValue::object($payload['brand'] ?? null, LogisticPointBrandType::class),
            address: YandexMarketDtoValue::object($payload['address'] ?? null, LogisticPointAddressDTO::class),
            workingSchedule: YandexMarketDtoValue::object($payload['workingSchedule'] ?? null, LogisticPointScheduleDTO::class),
            deliveryRestrictions: YandexMarketDtoValue::object($payload['deliveryRestrictions'] ?? null, LogisticPointDeliveryRestrictionDTO::class),
            features: YandexMarketDtoValue::objectList($payload['features'] ?? null, LogisticPointFeatureType::class),
            storagePeriod: YandexMarketDtoValue::int($payload['storagePeriod'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['logisticPointId', 'brand', 'address', 'workingSchedule', 'deliveryRestrictions', 'features', 'storagePeriod']),
        );
    }
}
