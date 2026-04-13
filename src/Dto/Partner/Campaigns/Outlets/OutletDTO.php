<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Outlets;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OutletDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<string> $phones
     * @param list<OutletDeliveryRuleDTO> $deliveryRules
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $name,
        public ?OutletType $type,
        public ?string $coords,
        public ?bool $isMain,
        public ?string $shopOutletCode,
        public ?OutletVisibilityType $visibility,
        public ?OutletAddressDTO $address,
        public array $phones,
        public ?OutletWorkingScheduleDTO $workingSchedule,
        public array $deliveryRules,
        public ?int $storagePeriod,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            name: YandexMarketDtoValue::string($payload['name'] ?? null),
            type: YandexMarketDtoValue::object($payload['type'] ?? null, OutletType::class),
            coords: YandexMarketDtoValue::string($payload['coords'] ?? null),
            isMain: YandexMarketDtoValue::bool($payload['isMain'] ?? null),
            shopOutletCode: YandexMarketDtoValue::string($payload['shopOutletCode'] ?? null),
            visibility: YandexMarketDtoValue::object($payload['visibility'] ?? null, OutletVisibilityType::class),
            address: YandexMarketDtoValue::object($payload['address'] ?? null, OutletAddressDTO::class),
            phones: YandexMarketDtoValue::array($payload['phones'] ?? null),
            workingSchedule: YandexMarketDtoValue::object($payload['workingSchedule'] ?? null, OutletWorkingScheduleDTO::class),
            deliveryRules: YandexMarketDtoValue::objectList($payload['deliveryRules'] ?? null, OutletDeliveryRuleDTO::class),
            storagePeriod: YandexMarketDtoValue::int($payload['storagePeriod'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['name', 'type', 'coords', 'isMain', 'shopOutletCode', 'visibility', 'address', 'phones', 'workingSchedule', 'deliveryRules', 'storagePeriod']),
        );
    }
}
