<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GpsDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $latitude,
        public ?float $longitude,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            latitude: YandexMarketDtoValue::float($payload['latitude'] ?? null),
            longitude: YandexMarketDtoValue::float($payload['longitude'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['latitude', 'longitude']),
        );
    }
}
