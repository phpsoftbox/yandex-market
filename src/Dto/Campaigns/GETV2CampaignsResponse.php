<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Dto\Campaigns;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

use function array_values;
use function is_array;

final readonly class GETV2CampaignsResponse implements YandexMarketDtoInterface
{
    /**
     * @param list<array<string, mixed>> $campaigns
     * @param array<array-key, mixed> $pager
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $campaigns,
        public array $pager,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            campaigns: self::arrayList($payload['campaigns'] ?? null),
            pager: YandexMarketDtoValue::array($payload['pager'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['campaigns', 'pager']),
        );
    }

    /**
     * @return list<array<string, mixed>>
     */
    private static function arrayList(mixed $value): array
    {
        if (!is_array($value)) {
            return [];
        }

        $items = [];
        foreach ($value as $item) {
            if (is_array($item)) {
                $items[] = $item;
            }
        }

        return array_values($items);
    }
}
