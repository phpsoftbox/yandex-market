<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Ratings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class QualityRatingAffectedOrderDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $orderId,
        public ?string $description,
        public ?AffectedOrderQualityRatingComponentType $componentType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            orderId: YandexMarketDtoValue::int($payload['orderId'] ?? null),
            description: YandexMarketDtoValue::string($payload['description'] ?? null),
            componentType: YandexMarketDtoValue::object($payload['componentType'] ?? null, AffectedOrderQualityRatingComponentType::class),
            extra: YandexMarketDtoValue::extra($payload, ['orderId', 'description', 'componentType']),
        );
    }
}
