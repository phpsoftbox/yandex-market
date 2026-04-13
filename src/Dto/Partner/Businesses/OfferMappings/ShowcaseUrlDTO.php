<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ShowcaseUrlDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ShowcaseType $showcaseType,
        public ?string $showcaseUrl,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            showcaseType: YandexMarketDtoValue::object($payload['showcaseType'] ?? null, ShowcaseType::class),
            showcaseUrl: YandexMarketDtoValue::string($payload['showcaseUrl'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['showcaseType', 'showcaseUrl']),
        );
    }
}
