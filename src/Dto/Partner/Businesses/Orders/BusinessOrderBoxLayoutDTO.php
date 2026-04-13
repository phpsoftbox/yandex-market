<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class BusinessOrderBoxLayoutDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<BusinessOrderBoxLayoutItemDTO> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $items,
        public ?int $boxId,
        public ?string $barcode,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            items: YandexMarketDtoValue::objectList($payload['items'] ?? null, BusinessOrderBoxLayoutItemDTO::class),
            boxId: YandexMarketDtoValue::int($payload['boxId'] ?? null),
            barcode: YandexMarketDtoValue::string($payload['barcode'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['items', 'boxId', 'barcode']),
        );
    }
}
