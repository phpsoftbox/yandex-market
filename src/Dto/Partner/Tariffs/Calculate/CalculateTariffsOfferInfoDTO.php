<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Tariffs\Calculate;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CalculateTariffsOfferInfoDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<CalculatedTariffDTO> $tariffs
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?CalculateTariffsOfferDTO $offer,
        public array $tariffs,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offer: YandexMarketDtoValue::object($payload['offer'] ?? null, CalculateTariffsOfferDTO::class),
            tariffs: YandexMarketDtoValue::objectList($payload['tariffs'] ?? null, CalculatedTariffDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['offer', 'tariffs']),
        );
    }
}
