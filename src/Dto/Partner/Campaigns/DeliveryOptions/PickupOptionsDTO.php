<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\DeliveryOptions;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders\LogisticPointId;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class PickupOptionsDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<PickupOptionDTO> $options
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?LogisticPointId $logisticPointId,
        public array $options,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            logisticPointId: YandexMarketDtoValue::object($payload['logisticPointId'] ?? null, LogisticPointId::class),
            options: YandexMarketDtoValue::objectList($payload['options'] ?? null, PickupOptionDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['logisticPointId', 'options']),
        );
    }
}
