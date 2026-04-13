<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\FirstMile;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ShipmentInfoDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ShipmentStatusType $status,
        public ?string $statusDescription,
        public ?string $statusUpdateTime,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            status: YandexMarketDtoValue::object($payload['status'] ?? null, ShipmentStatusType::class),
            statusDescription: YandexMarketDtoValue::string($payload['statusDescription'] ?? null),
            statusUpdateTime: YandexMarketDtoValue::string($payload['statusUpdateTime'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['status', 'statusDescription', 'statusUpdateTime']),
        );
    }
}
