<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Reports\UnitedNetting;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GenerateReportDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $reportId,
        public ?int $estimatedGenerationTime,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            reportId: YandexMarketDtoValue::string($payload['reportId'] ?? null),
            estimatedGenerationTime: YandexMarketDtoValue::int($payload['estimatedGenerationTime'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['reportId', 'estimatedGenerationTime']),
        );
    }
}
