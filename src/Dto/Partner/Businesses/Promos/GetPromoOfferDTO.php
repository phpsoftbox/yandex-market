<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Promos;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetPromoOfferDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ShopSku $offerId,
        public ?PromoOfferParticipationStatusType $status,
        public ?PromoOfferParamsDTO $params,
        public ?PromoOfferAutoParticipatingDetailsDTO $autoParticipatingDetails,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offerId: YandexMarketDtoValue::object($payload['offerId'] ?? null, ShopSku::class),
            status: YandexMarketDtoValue::object($payload['status'] ?? null, PromoOfferParticipationStatusType::class),
            params: YandexMarketDtoValue::object($payload['params'] ?? null, PromoOfferParamsDTO::class),
            autoParticipatingDetails: YandexMarketDtoValue::object($payload['autoParticipatingDetails'] ?? null, PromoOfferAutoParticipatingDetailsDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['offerId', 'status', 'params', 'autoParticipatingDetails']),
        );
    }
}
