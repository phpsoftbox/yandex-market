<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderCourierDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $fullName,
        public ?string $phone,
        public ?string $phoneExtension,
        public ?string $vehicleNumber,
        public ?string $vehicleDescription,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            fullName: YandexMarketDtoValue::string($payload['fullName'] ?? null),
            phone: YandexMarketDtoValue::string($payload['phone'] ?? null),
            phoneExtension: YandexMarketDtoValue::string($payload['phoneExtension'] ?? null),
            vehicleNumber: YandexMarketDtoValue::string($payload['vehicleNumber'] ?? null),
            vehicleDescription: YandexMarketDtoValue::string($payload['vehicleDescription'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['fullName', 'phone', 'phoneExtension', 'vehicleNumber', 'vehicleDescription']),
        );
    }
}
