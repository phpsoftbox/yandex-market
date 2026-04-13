<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Returns;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class TrackDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $trackCode,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            trackCode: YandexMarketDtoValue::string($payload['trackCode'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['trackCode']),
        );
    }
}
