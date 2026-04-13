<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderLabelDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<ParcelBoxLabelDTO> $parcelBoxLabels
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $orderId,
        public ?int $placesNumber,
        public ?Url $url,
        public array $parcelBoxLabels,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            orderId: YandexMarketDtoValue::int($payload['orderId'] ?? null),
            placesNumber: YandexMarketDtoValue::int($payload['placesNumber'] ?? null),
            url: YandexMarketDtoValue::object($payload['url'] ?? null, Url::class),
            parcelBoxLabels: YandexMarketDtoValue::objectList($payload['parcelBoxLabels'] ?? null, ParcelBoxLabelDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['orderId', 'placesNumber', 'url', 'parcelBoxLabels']),
        );
    }
}
