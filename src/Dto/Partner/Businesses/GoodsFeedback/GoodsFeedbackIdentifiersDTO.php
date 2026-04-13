<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsFeedback;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ShopSku;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GoodsFeedbackIdentifiersDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $orderId,
        public ?ShopSku $offerId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            orderId: YandexMarketDtoValue::int($payload['orderId'] ?? null),
            offerId: YandexMarketDtoValue::object($payload['offerId'] ?? null, ShopSku::class),
            extra: YandexMarketDtoValue::extra($payload, ['orderId', 'offerId']),
        );
    }
}
