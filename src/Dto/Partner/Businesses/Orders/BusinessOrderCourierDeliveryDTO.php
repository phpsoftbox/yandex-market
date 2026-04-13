<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\RegionDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class BusinessOrderCourierDeliveryDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?BusinessOrderDeliveryAddressDTO $address,
        public ?RegionDTO $region,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            address: YandexMarketDtoValue::object($payload['address'] ?? null, BusinessOrderDeliveryAddressDTO::class),
            region: YandexMarketDtoValue::object($payload['region'] ?? null, RegionDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['address', 'region']),
        );
    }
}
