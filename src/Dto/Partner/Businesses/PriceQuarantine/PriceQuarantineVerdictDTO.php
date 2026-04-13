<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\PriceQuarantine;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class PriceQuarantineVerdictDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<PriceQuarantineVerdictParameterDTO> $params
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PriceQuarantineVerdictType $type,
        public array $params,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            type: YandexMarketDtoValue::object($payload['type'] ?? null, PriceQuarantineVerdictType::class),
            params: YandexMarketDtoValue::objectList($payload['params'] ?? null, PriceQuarantineVerdictParameterDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['type', 'params']),
        );
    }
}
