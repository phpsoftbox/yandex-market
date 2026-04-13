<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderBuyerInfoDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $phone,
        public ?bool $trusted,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            phone: YandexMarketDtoValue::string($payload['phone'] ?? null),
            trusted: YandexMarketDtoValue::bool($payload['trusted'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['phone', 'trusted']),
        );
    }
}
