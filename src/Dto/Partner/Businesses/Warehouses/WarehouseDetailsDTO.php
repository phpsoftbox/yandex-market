<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Warehouses;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\CampaignId;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class WarehouseDetailsDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?string $name,
        public ?CampaignId $campaignId,
        public ?bool $express,
        public ?WarehouseGroupInfoDTO $groupInfo,
        public ?WarehouseAddressDTO $address,
        public ?WarehouseStatusDTO $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            name: YandexMarketDtoValue::string($payload['name'] ?? null),
            campaignId: YandexMarketDtoValue::object($payload['campaignId'] ?? null, CampaignId::class),
            express: YandexMarketDtoValue::bool($payload['express'] ?? null),
            groupInfo: YandexMarketDtoValue::object($payload['groupInfo'] ?? null, WarehouseGroupInfoDTO::class),
            address: YandexMarketDtoValue::object($payload['address'] ?? null, WarehouseAddressDTO::class),
            status: YandexMarketDtoValue::object($payload['status'] ?? null, WarehouseStatusDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'name', 'campaignId', 'express', 'groupInfo', 'address', 'status']),
        );
    }
}
