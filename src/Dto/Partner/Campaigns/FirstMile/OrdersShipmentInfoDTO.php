<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\FirstMile;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrdersShipmentInfoDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<int> $orderIdsWithLabels
     * @param list<int> $orderIdsWithoutLabels
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $orderIdsWithLabels,
        public array $orderIdsWithoutLabels,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            orderIdsWithLabels: YandexMarketDtoValue::array($payload['orderIdsWithLabels'] ?? null),
            orderIdsWithoutLabels: YandexMarketDtoValue::array($payload['orderIdsWithoutLabels'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['orderIdsWithLabels', 'orderIdsWithoutLabels']),
        );
    }
}
