<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\HiddenOffers;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class PackagingScrollingPagerDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $nextPageToken,
        public ?string $prevPageToken,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            nextPageToken: YandexMarketDtoValue::string($payload['nextPageToken'] ?? null),
            prevPageToken: YandexMarketDtoValue::string($payload['prevPageToken'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['nextPageToken', 'prevPageToken']),
        );
    }
}
