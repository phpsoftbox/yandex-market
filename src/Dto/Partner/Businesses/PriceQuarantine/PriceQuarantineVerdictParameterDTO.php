<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\PriceQuarantine;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class PriceQuarantineVerdictParameterDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PriceQuarantineVerdictParamNameType $name,
        public ?string $value,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            name: YandexMarketDtoValue::object($payload['name'] ?? null, PriceQuarantineVerdictParamNameType::class),
            value: YandexMarketDtoValue::string($payload['value'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['name', 'value']),
        );
    }
}
