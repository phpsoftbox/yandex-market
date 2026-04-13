<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Tariffs\Calculate;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CalculateTariffsOfferDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $categoryId,
        public ?float $price,
        public ?float $length,
        public ?float $width,
        public ?float $height,
        public ?float $weight,
        public ?int $quantity,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            categoryId: YandexMarketDtoValue::int($payload['categoryId'] ?? null),
            price: YandexMarketDtoValue::float($payload['price'] ?? null),
            length: YandexMarketDtoValue::float($payload['length'] ?? null),
            width: YandexMarketDtoValue::float($payload['width'] ?? null),
            height: YandexMarketDtoValue::float($payload['height'] ?? null),
            weight: YandexMarketDtoValue::float($payload['weight'] ?? null),
            quantity: YandexMarketDtoValue::int($payload['quantity'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['categoryId', 'price', 'length', 'width', 'height', 'weight', 'quantity']),
        );
    }
}
