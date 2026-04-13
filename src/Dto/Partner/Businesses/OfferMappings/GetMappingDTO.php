<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetMappingDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $marketSkuName,
        public ?string $marketModelName,
        public ?int $marketCategoryId,
        public ?string $marketCategoryName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            marketSkuName: YandexMarketDtoValue::string($payload['marketSkuName'] ?? null),
            marketModelName: YandexMarketDtoValue::string($payload['marketModelName'] ?? null),
            marketCategoryId: YandexMarketDtoValue::int($payload['marketCategoryId'] ?? null),
            marketCategoryName: YandexMarketDtoValue::string($payload['marketCategoryName'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['marketSkuName', 'marketModelName', 'marketCategoryId', 'marketCategoryName']),
        );
    }
}
