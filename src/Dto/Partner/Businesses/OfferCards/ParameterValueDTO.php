<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferCards;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ParameterValueDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $parameterId,
        public ?int $unitId,
        public ?int $valueId,
        public ?string $value,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            parameterId: YandexMarketDtoValue::int($payload['parameterId'] ?? null),
            unitId: YandexMarketDtoValue::int($payload['unitId'] ?? null),
            valueId: YandexMarketDtoValue::int($payload['valueId'] ?? null),
            value: YandexMarketDtoValue::string($payload['value'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['parameterId', 'unitId', 'valueId', 'value']),
        );
    }
}
