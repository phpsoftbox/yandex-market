<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Settings\RegionType;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class RegionDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?string $name,
        public ?RegionType $type,
        public ?RegionDTO $parent,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            name: YandexMarketDtoValue::string($payload['name'] ?? null),
            type: YandexMarketDtoValue::object($payload['type'] ?? null, RegionType::class),
            parent: YandexMarketDtoValue::object($payload['parent'] ?? null, RegionDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'name', 'type', 'parent']),
        );
    }
}
