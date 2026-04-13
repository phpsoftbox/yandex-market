<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Promos;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetPromoPromocodeInfoDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $promocode,
        public ?int $discount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            promocode: YandexMarketDtoValue::string($payload['promocode'] ?? null),
            discount: YandexMarketDtoValue::int($payload['discount'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['promocode', 'discount']),
        );
    }
}
