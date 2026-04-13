<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Returns;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\PackagingForwardScrollingPagerDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class PagedReturnsDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<ReturnDTO> $returns
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PackagingForwardScrollingPagerDTO $paging,
        public array $returns,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            paging: YandexMarketDtoValue::object($payload['paging'] ?? null, PackagingForwardScrollingPagerDTO::class),
            returns: YandexMarketDtoValue::objectList($payload['returns'] ?? null, ReturnDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['paging', 'returns']),
        );
    }
}
