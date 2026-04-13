<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Delivery\Services;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class DeliveryServicesDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<DeliveryServiceInfoDTO> $deliveryService
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $deliveryService,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            deliveryService: YandexMarketDtoValue::objectList($payload['deliveryService'] ?? null, DeliveryServiceInfoDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['deliveryService']),
        );
    }
}
