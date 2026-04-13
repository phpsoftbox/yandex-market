<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class CommodityCodeDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $code,
        public ?CommodityCodeType $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            code: YandexMarketDtoValue::string($payload['code'] ?? null),
            type: YandexMarketDtoValue::object($payload['type'] ?? null, CommodityCodeType::class),
            extra: YandexMarketDtoValue::extra($payload, ['code', 'type']),
        );
    }
}
