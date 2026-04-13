<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Promos;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class WarningPromoOfferUpdateDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<PromoOfferUpdateWarningDTO> $warnings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ShopSku $offerId,
        public array $warnings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offerId: YandexMarketDtoValue::object($payload['offerId'] ?? null, ShopSku::class),
            warnings: YandexMarketDtoValue::objectList($payload['warnings'] ?? null, PromoOfferUpdateWarningDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['offerId', 'warnings']),
        );
    }
}
