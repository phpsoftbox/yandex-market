<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Promos;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class UpdatePromoOffersResponse implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?UpdatePromoOffersResultDTO $result,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            result: YandexMarketDtoValue::object($payload['result'] ?? null, UpdatePromoOffersResultDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['result']),
        );
    }
}
