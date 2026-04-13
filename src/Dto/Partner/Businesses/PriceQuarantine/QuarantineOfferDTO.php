<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\PriceQuarantine;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Returns\BasePriceDTO;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class QuarantineOfferDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<PriceQuarantineVerdictDTO> $verdicts
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ShopSku $offerId,
        public ?BasePriceDTO $currentPrice,
        public ?BasePriceDTO $lastValidPrice,
        public array $verdicts,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offerId: YandexMarketDtoValue::object($payload['offerId'] ?? null, ShopSku::class),
            currentPrice: YandexMarketDtoValue::object($payload['currentPrice'] ?? null, BasePriceDTO::class),
            lastValidPrice: YandexMarketDtoValue::object($payload['lastValidPrice'] ?? null, BasePriceDTO::class),
            verdicts: YandexMarketDtoValue::objectList($payload['verdicts'] ?? null, PriceQuarantineVerdictDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['offerId', 'currentPrice', 'lastValidPrice', 'verdicts']),
        );
    }
}
