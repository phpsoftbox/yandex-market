<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Returns;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ReturnInstanceDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ReturnInstanceStockType $stockType,
        public ?ReturnInstanceStatusType $status,
        public ?string $cis,
        public ?string $imei,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            stockType: YandexMarketDtoValue::object($payload['stockType'] ?? null, ReturnInstanceStockType::class),
            status: YandexMarketDtoValue::object($payload['status'] ?? null, ReturnInstanceStatusType::class),
            cis: YandexMarketDtoValue::string($payload['cis'] ?? null),
            imei: YandexMarketDtoValue::string($payload['imei'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['stockType', 'status', 'cis', 'imei']),
        );
    }
}
