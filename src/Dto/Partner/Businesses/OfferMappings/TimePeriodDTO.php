<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class TimePeriodDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $timePeriod,
        public ?TimeUnitType $timeUnit,
        public ?string $comment,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            timePeriod: YandexMarketDtoValue::int($payload['timePeriod'] ?? null),
            timeUnit: YandexMarketDtoValue::object($payload['timeUnit'] ?? null, TimeUnitType::class),
            comment: YandexMarketDtoValue::string($payload['comment'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['timePeriod', 'timeUnit', 'comment']),
        );
    }
}
