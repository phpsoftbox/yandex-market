<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\SupplyRequests;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\Url;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class SupplyRequestDocumentDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?SupplyRequestDocumentType $type,
        public ?Url $url,
        public ?string $createdAt,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            type: YandexMarketDtoValue::object($payload['type'] ?? null, SupplyRequestDocumentType::class),
            url: YandexMarketDtoValue::object($payload['url'] ?? null, Url::class),
            createdAt: YandexMarketDtoValue::string($payload['createdAt'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['type', 'url', 'createdAt']),
        );
    }
}
