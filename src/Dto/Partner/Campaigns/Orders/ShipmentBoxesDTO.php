<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ShipmentBoxesDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<ParcelBoxDTO> $boxes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $boxes,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            boxes: YandexMarketDtoValue::objectList($payload['boxes'] ?? null, ParcelBoxDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['boxes']),
        );
    }
}
