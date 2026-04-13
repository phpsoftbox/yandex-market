<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferCards;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class UpdateOfferContentResultDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OfferContentErrorDTO> $errors
     * @param list<OfferContentErrorDTO> $warnings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ShopSku $offerId,
        public array $errors,
        public array $warnings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offerId: YandexMarketDtoValue::object($payload['offerId'] ?? null, ShopSku::class),
            errors: YandexMarketDtoValue::objectList($payload['errors'] ?? null, OfferContentErrorDTO::class),
            warnings: YandexMarketDtoValue::objectList($payload['warnings'] ?? null, OfferContentErrorDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['offerId', 'errors', 'warnings']),
        );
    }
}
