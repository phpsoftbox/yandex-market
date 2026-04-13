<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Returns;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ReturnAvailableDecisionsResponse implements YandexMarketDtoInterface
{
    /**
     * @param list<ReturnAvailableDecisionDTO> $availableDecisions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $availableDecisions,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            availableDecisions: YandexMarketDtoValue::objectList($payload['availableDecisions'] ?? null, ReturnAvailableDecisionDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['availableDecisions']),
        );
    }
}
