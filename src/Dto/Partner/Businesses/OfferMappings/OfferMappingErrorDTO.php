<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OfferMappingErrorDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?OfferMappingErrorType $type,
        public ?int $parameterId,
        public ?string $message,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            type: YandexMarketDtoValue::object($payload['type'] ?? null, OfferMappingErrorType::class),
            parameterId: YandexMarketDtoValue::int($payload['parameterId'] ?? null),
            message: YandexMarketDtoValue::string($payload['message'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['type', 'parameterId', 'message']),
        );
    }
}
