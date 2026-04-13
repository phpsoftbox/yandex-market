<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Tariffs\Calculate;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CalculateTariffsResponseDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<CalculateTariffsOfferInfoDTO> $offers
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $offers,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offers: YandexMarketDtoValue::objectList($payload['offers'] ?? null, CalculateTariffsOfferInfoDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['offers']),
        );
    }
}
