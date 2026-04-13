<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\CountryCode;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class BriefOrderItemInstanceDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?Cis $cis,
        public ?string $uin,
        public ?string $rnpt,
        public ?string $gtd,
        public ?CountryCode $countryCode,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cis: YandexMarketDtoValue::object($payload['cis'] ?? null, Cis::class),
            uin: YandexMarketDtoValue::string($payload['uin'] ?? null),
            rnpt: YandexMarketDtoValue::string($payload['rnpt'] ?? null),
            gtd: YandexMarketDtoValue::string($payload['gtd'] ?? null),
            countryCode: YandexMarketDtoValue::object($payload['countryCode'] ?? null, CountryCode::class),
            extra: YandexMarketDtoValue::extra($payload, ['cis', 'uin', 'rnpt', 'gtd', 'countryCode']),
        );
    }
}
