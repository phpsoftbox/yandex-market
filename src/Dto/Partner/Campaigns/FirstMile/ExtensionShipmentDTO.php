<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\FirstMile;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ExtensionShipmentDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<ShipmentActionType> $availableActions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ShipmentStatusChangeDTO $currentStatus,
        public array $availableActions,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            currentStatus: YandexMarketDtoValue::object($payload['currentStatus'] ?? null, ShipmentStatusChangeDTO::class),
            availableActions: YandexMarketDtoValue::objectList($payload['availableActions'] ?? null, ShipmentActionType::class),
            extra: YandexMarketDtoValue::extra($payload, ['currentStatus', 'availableActions']),
        );
    }
}
