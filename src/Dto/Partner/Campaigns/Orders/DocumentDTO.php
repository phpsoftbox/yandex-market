<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class DocumentDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?OrderDocumentStatusType $status,
        public ?string $number,
        public ?string $date,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            status: YandexMarketDtoValue::object($payload['status'] ?? null, OrderDocumentStatusType::class),
            number: YandexMarketDtoValue::string($payload['number'] ?? null),
            date: YandexMarketDtoValue::string($payload['date'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['status', 'number', 'date']),
        );
    }
}
