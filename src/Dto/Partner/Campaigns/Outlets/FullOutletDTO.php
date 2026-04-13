<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Outlets;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\RegionDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class FullOutletDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?OutletStatusType $status,
        public ?RegionDTO $region,
        public ?string $shopOutletId,
        public ?string $workingTime,
        public ?string $moderationReason,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            status: YandexMarketDtoValue::object($payload['status'] ?? null, OutletStatusType::class),
            region: YandexMarketDtoValue::object($payload['region'] ?? null, RegionDTO::class),
            shopOutletId: YandexMarketDtoValue::string($payload['shopOutletId'] ?? null),
            workingTime: YandexMarketDtoValue::string($payload['workingTime'] ?? null),
            moderationReason: YandexMarketDtoValue::string($payload['moderationReason'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'status', 'region', 'shopOutletId', 'workingTime', 'moderationReason']),
        );
    }
}
