<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Promos;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetPromoMechanicsInfoDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?MechanicsType $type,
        public ?GetPromoPromocodeInfoDTO $promocodeInfo,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            type: YandexMarketDtoValue::object($payload['type'] ?? null, MechanicsType::class),
            promocodeInfo: YandexMarketDtoValue::object($payload['promocodeInfo'] ?? null, GetPromoPromocodeInfoDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['type', 'promocodeInfo']),
        );
    }
}
