<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Promos;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetPromoBestsellerInfoDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $bestseller,
        public ?string $entryDeadline,
        public ?bool $renewalEnabled,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            bestseller: YandexMarketDtoValue::bool($payload['bestseller'] ?? null),
            entryDeadline: YandexMarketDtoValue::string($payload['entryDeadline'] ?? null),
            renewalEnabled: YandexMarketDtoValue::bool($payload['renewalEnabled'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['bestseller', 'entryDeadline', 'renewalEnabled']),
        );
    }
}
