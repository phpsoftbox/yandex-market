<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class BusinessOrderBoxLayoutItemDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<BriefOrderItemInstanceDTO> $instances
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?int $fullCount,
        public ?BusinessOrderBoxLayoutPartialCountDTO $partialCount,
        public array $instances,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            fullCount: YandexMarketDtoValue::int($payload['fullCount'] ?? null),
            partialCount: YandexMarketDtoValue::object($payload['partialCount'] ?? null, BusinessOrderBoxLayoutPartialCountDTO::class),
            instances: YandexMarketDtoValue::objectList($payload['instances'] ?? null, BriefOrderItemInstanceDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'fullCount', 'partialCount', 'instances']),
        );
    }
}
