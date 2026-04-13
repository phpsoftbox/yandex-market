<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\FirstMile;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class PalletsCountDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $planned,
        public ?int $fact,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            planned: YandexMarketDtoValue::int($payload['planned'] ?? null),
            fact: YandexMarketDtoValue::int($payload['fact'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['planned', 'fact']),
        );
    }
}
