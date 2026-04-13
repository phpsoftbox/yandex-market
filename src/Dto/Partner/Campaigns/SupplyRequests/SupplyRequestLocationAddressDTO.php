<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\SupplyRequests;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\GpsDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class SupplyRequestLocationAddressDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $fullAddress,
        public ?GpsDTO $gps,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            fullAddress: YandexMarketDtoValue::string($payload['fullAddress'] ?? null),
            gps: YandexMarketDtoValue::object($payload['gps'] ?? null, GpsDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['fullAddress', 'gps']),
        );
    }
}
