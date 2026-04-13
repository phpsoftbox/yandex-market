<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class DigitalGoodsDeliveryDetailsDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?DigitalGoodsDeliveryType $type,
        public ?string $steamLink,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            type: YandexMarketDtoValue::object($payload['type'] ?? null, DigitalGoodsDeliveryType::class),
            steamLink: YandexMarketDtoValue::string($payload['steamLink'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['type', 'steamLink']),
        );
    }
}
