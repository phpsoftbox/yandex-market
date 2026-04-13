<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderItemPromoDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?OrderPromoType $type,
        public ?float $discount,
        public ?float $subsidy,
        public ?string $shopPromoId,
        public ?string $marketPromoId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            type: YandexMarketDtoValue::object($payload['type'] ?? null, OrderPromoType::class),
            discount: YandexMarketDtoValue::float($payload['discount'] ?? null),
            subsidy: YandexMarketDtoValue::float($payload['subsidy'] ?? null),
            shopPromoId: YandexMarketDtoValue::string($payload['shopPromoId'] ?? null),
            marketPromoId: YandexMarketDtoValue::string($payload['marketPromoId'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['type', 'discount', 'subsidy', 'shopPromoId', 'marketPromoId']),
        );
    }
}
