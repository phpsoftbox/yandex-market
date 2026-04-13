<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\ReturnDeliveryOptions;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders\LogisticPointId;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class PickupReturnDeliveryOptionsDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<LogisticPointId> $logisticPointIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $logisticPointIds,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            logisticPointIds: YandexMarketDtoValue::objectList($payload['logisticPointIds'] ?? null, LogisticPointId::class),
            extra: YandexMarketDtoValue::extra($payload, ['logisticPointIds']),
        );
    }
}
