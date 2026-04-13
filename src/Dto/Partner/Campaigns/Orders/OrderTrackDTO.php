<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderTrackDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $trackCode,
        public ?int $deliveryServiceId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            trackCode: YandexMarketDtoValue::string($payload['trackCode'] ?? null),
            deliveryServiceId: YandexMarketDtoValue::int($payload['deliveryServiceId'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['trackCode', 'deliveryServiceId']),
        );
    }
}
