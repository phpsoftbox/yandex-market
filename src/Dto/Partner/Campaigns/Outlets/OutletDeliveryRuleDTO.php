<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Outlets;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OutletDeliveryRuleDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $minDeliveryDays,
        public ?int $maxDeliveryDays,
        public ?int $deliveryServiceId,
        public ?int $orderBefore,
        public ?float $priceFreePickup,
        public ?bool $unspecifiedDeliveryInterval,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            minDeliveryDays: YandexMarketDtoValue::int($payload['minDeliveryDays'] ?? null),
            maxDeliveryDays: YandexMarketDtoValue::int($payload['maxDeliveryDays'] ?? null),
            deliveryServiceId: YandexMarketDtoValue::int($payload['deliveryServiceId'] ?? null),
            orderBefore: YandexMarketDtoValue::int($payload['orderBefore'] ?? null),
            priceFreePickup: YandexMarketDtoValue::float($payload['priceFreePickup'] ?? null),
            unspecifiedDeliveryInterval: YandexMarketDtoValue::bool($payload['unspecifiedDeliveryInterval'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['minDeliveryDays', 'maxDeliveryDays', 'deliveryServiceId', 'orderBefore', 'priceFreePickup', 'unspecifiedDeliveryInterval']),
        );
    }
}
