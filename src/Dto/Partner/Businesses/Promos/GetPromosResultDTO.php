<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Promos;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetPromosResultDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<GetPromoDTO> $promos
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $promos,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            promos: YandexMarketDtoValue::objectList($payload['promos'] ?? null, GetPromoDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['promos']),
        );
    }
}
