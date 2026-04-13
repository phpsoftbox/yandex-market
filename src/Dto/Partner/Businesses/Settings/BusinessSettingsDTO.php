<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Settings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class BusinessSettingsDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $onlyDefaultPrice,
        public ?CurrencyType $currency,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            onlyDefaultPrice: YandexMarketDtoValue::bool($payload['onlyDefaultPrice'] ?? null),
            currency: YandexMarketDtoValue::object($payload['currency'] ?? null, CurrencyType::class),
            extra: YandexMarketDtoValue::extra($payload, ['onlyDefaultPrice', 'currency']),
        );
    }
}
