<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Settings\DateDdMmYyyy;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderShipmentDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OrderTrackDTO> $tracks
     * @param list<OrderParcelBoxDTO> $boxes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?DateDdMmYyyy $shipmentDate,
        public ?string $shipmentTime,
        public array $tracks,
        public array $boxes,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            shipmentDate: YandexMarketDtoValue::object($payload['shipmentDate'] ?? null, DateDdMmYyyy::class),
            shipmentTime: YandexMarketDtoValue::string($payload['shipmentTime'] ?? null),
            tracks: YandexMarketDtoValue::objectList($payload['tracks'] ?? null, OrderTrackDTO::class),
            boxes: YandexMarketDtoValue::objectList($payload['boxes'] ?? null, OrderParcelBoxDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'shipmentDate', 'shipmentTime', 'tracks', 'boxes']),
        );
    }
}
