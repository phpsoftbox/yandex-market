<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\SupplyRequests;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class SupplyRequestDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<SupplyRequestReferenceDTO> $childrenLinks
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?SupplyRequestIdDTO $id,
        public ?SupplyRequestType $type,
        public ?SupplyRequestSubType $subtype,
        public ?SupplyRequestStatusType $status,
        public ?string $updatedAt,
        public ?SupplyRequestCountersDTO $counters,
        public ?SupplyRequestReferenceDTO $parentLink,
        public array $childrenLinks,
        public ?SupplyRequestLocationDTO $targetLocation,
        public ?SupplyRequestLocationDTO $transitLocation,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::object($payload['id'] ?? null, SupplyRequestIdDTO::class),
            type: YandexMarketDtoValue::object($payload['type'] ?? null, SupplyRequestType::class),
            subtype: YandexMarketDtoValue::object($payload['subtype'] ?? null, SupplyRequestSubType::class),
            status: YandexMarketDtoValue::object($payload['status'] ?? null, SupplyRequestStatusType::class),
            updatedAt: YandexMarketDtoValue::string($payload['updatedAt'] ?? null),
            counters: YandexMarketDtoValue::object($payload['counters'] ?? null, SupplyRequestCountersDTO::class),
            parentLink: YandexMarketDtoValue::object($payload['parentLink'] ?? null, SupplyRequestReferenceDTO::class),
            childrenLinks: YandexMarketDtoValue::objectList($payload['childrenLinks'] ?? null, SupplyRequestReferenceDTO::class),
            targetLocation: YandexMarketDtoValue::object($payload['targetLocation'] ?? null, SupplyRequestLocationDTO::class),
            transitLocation: YandexMarketDtoValue::object($payload['transitLocation'] ?? null, SupplyRequestLocationDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'type', 'subtype', 'status', 'updatedAt', 'counters', 'parentLink', 'childrenLinks', 'targetLocation', 'transitLocation']),
        );
    }
}
