<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\SupplyRequests;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetSupplyRequestDocumentsDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<SupplyRequestDocumentDTO> $documents
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $documents,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            documents: YandexMarketDtoValue::objectList($payload['documents'] ?? null, SupplyRequestDocumentDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['documents']),
        );
    }
}
