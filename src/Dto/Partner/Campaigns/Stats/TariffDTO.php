<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Stats;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Settings\CurrencyType;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class TariffDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<TariffParameterDTO> $parameters
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?TariffType $type,
        public ?float $percent,
        public ?float $amount,
        public ?CurrencyType $currency,
        public array $parameters,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            type: YandexMarketDtoValue::object($payload['type'] ?? null, TariffType::class),
            percent: YandexMarketDtoValue::float($payload['percent'] ?? null),
            amount: YandexMarketDtoValue::float($payload['amount'] ?? null),
            currency: YandexMarketDtoValue::object($payload['currency'] ?? null, CurrencyType::class),
            parameters: YandexMarketDtoValue::objectList($payload['parameters'] ?? null, TariffParameterDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['type', 'percent', 'amount', 'currency', 'parameters']),
        );
    }
}
