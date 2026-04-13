<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Reports\Info;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ReportInfoDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ReportStatusType $status,
        public ?ReportSubStatusType $subStatus,
        public ?string $generationRequestedAt,
        public ?string $generationFinishedAt,
        public ?string $file,
        public ?int $estimatedGenerationTime,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            status: YandexMarketDtoValue::object($payload['status'] ?? null, ReportStatusType::class),
            subStatus: YandexMarketDtoValue::object($payload['subStatus'] ?? null, ReportSubStatusType::class),
            generationRequestedAt: YandexMarketDtoValue::string($payload['generationRequestedAt'] ?? null),
            generationFinishedAt: YandexMarketDtoValue::string($payload['generationFinishedAt'] ?? null),
            file: YandexMarketDtoValue::string($payload['file'] ?? null),
            estimatedGenerationTime: YandexMarketDtoValue::int($payload['estimatedGenerationTime'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['status', 'subStatus', 'generationRequestedAt', 'generationFinishedAt', 'file', 'estimatedGenerationTime']),
        );
    }
}
