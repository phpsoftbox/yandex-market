<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\LogisticsPoints;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\PackagingForwardScrollingPagerDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetLogisticsPointsDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<LogisticPointDTO> $logisticPoints
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $logisticPoints,
        public ?PackagingForwardScrollingPagerDTO $paging,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            logisticPoints: YandexMarketDtoValue::objectList($payload['logisticPoints'] ?? null, LogisticPointDTO::class),
            paging: YandexMarketDtoValue::object($payload['paging'] ?? null, PackagingForwardScrollingPagerDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['logisticPoints', 'paging']),
        );
    }
}
