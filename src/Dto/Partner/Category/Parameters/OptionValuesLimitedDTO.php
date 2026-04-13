<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Category\Parameters;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OptionValuesLimitedDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<int> $optionValueIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $limitingOptionValueId,
        public array $optionValueIds,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            limitingOptionValueId: YandexMarketDtoValue::int($payload['limitingOptionValueId'] ?? null),
            optionValueIds: YandexMarketDtoValue::array($payload['optionValueIds'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['limitingOptionValueId', 'optionValueIds']),
        );
    }
}
