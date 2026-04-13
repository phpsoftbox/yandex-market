<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Offers;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Returns\BasePriceDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class PriceCompetitivenessThresholdsDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?BasePriceDTO $optimalPrice,
        public ?BasePriceDTO $averagePrice,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            optimalPrice: YandexMarketDtoValue::object($payload['optimalPrice'] ?? null, BasePriceDTO::class),
            averagePrice: YandexMarketDtoValue::object($payload['averagePrice'] ?? null, BasePriceDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['optimalPrice', 'averagePrice']),
        );
    }
}
