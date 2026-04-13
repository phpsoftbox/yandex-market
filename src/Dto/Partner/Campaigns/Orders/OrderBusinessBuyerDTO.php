<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderBusinessBuyerDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $inn,
        public ?string $kpp,
        public ?string $organizationName,
        public ?string $organizationJurAddress,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            inn: YandexMarketDtoValue::string($payload['inn'] ?? null),
            kpp: YandexMarketDtoValue::string($payload['kpp'] ?? null),
            organizationName: YandexMarketDtoValue::string($payload['organizationName'] ?? null),
            organizationJurAddress: YandexMarketDtoValue::string($payload['organizationJurAddress'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['inn', 'kpp', 'organizationName', 'organizationJurAddress']),
        );
    }
}
