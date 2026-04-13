<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Regions\Children;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\RegionDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class RegionWithChildrenDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<RegionDTO> $children
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $children,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            children: YandexMarketDtoValue::objectList($payload['children'] ?? null, RegionDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['children']),
        );
    }
}
