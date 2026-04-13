<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class DeliveryIntervalsUpdateOptionsDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<DeliveryIntervalsUpdateOptionDTO> $availableDeliveryIntervals
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $availableDeliveryIntervals,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            availableDeliveryIntervals: YandexMarketDtoValue::objectList($payload['availableDeliveryIntervals'] ?? null, DeliveryIntervalsUpdateOptionDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['availableDeliveryIntervals']),
        );
    }
}
