<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Shipments;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ApiErrorResponse implements YandexMarketDtoInterface
{
    /**
     * @param list<ApiErrorDTO> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errors,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errors: YandexMarketDtoValue::objectList($payload['errors'] ?? null, ApiErrorDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['errors']),
        );
    }
}
