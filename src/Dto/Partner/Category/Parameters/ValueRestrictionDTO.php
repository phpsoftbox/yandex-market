<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Category\Parameters;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ValueRestrictionDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<OptionValuesLimitedDTO> $limitedValues
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $limitingParameterId,
        public array $limitedValues,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            limitingParameterId: YandexMarketDtoValue::int($payload['limitingParameterId'] ?? null),
            limitedValues: YandexMarketDtoValue::objectList($payload['limitedValues'] ?? null, OptionValuesLimitedDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['limitingParameterId', 'limitedValues']),
        );
    }
}
