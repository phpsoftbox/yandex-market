<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OfferConditionDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?OfferConditionType $type,
        public ?OfferConditionQualityType $quality,
        public ?string $reason,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            type: YandexMarketDtoValue::object($payload['type'] ?? null, OfferConditionType::class),
            quality: YandexMarketDtoValue::object($payload['quality'] ?? null, OfferConditionQualityType::class),
            reason: YandexMarketDtoValue::string($payload['reason'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['type', 'quality', 'reason']),
        );
    }
}
