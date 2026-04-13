<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class FlippingPagerDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $total,
        public ?int $from,
        public ?int $to,
        public ?int $currentPage,
        public ?int $pagesCount,
        public ?int $pageSize,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            total: YandexMarketDtoValue::int($payload['total'] ?? null),
            from: YandexMarketDtoValue::int($payload['from'] ?? null),
            to: YandexMarketDtoValue::int($payload['to'] ?? null),
            currentPage: YandexMarketDtoValue::int($payload['currentPage'] ?? null),
            pagesCount: YandexMarketDtoValue::int($payload['pagesCount'] ?? null),
            pageSize: YandexMarketDtoValue::int($payload['pageSize'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['total', 'from', 'to', 'currentPage', 'pagesCount', 'pageSize']),
        );
    }
}
