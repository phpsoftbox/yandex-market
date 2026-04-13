<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderItemValidationStatusDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<UinDTO> $uin
     * @param list<CisDTO> $cis
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public array $uin,
        public array $cis,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            uin: YandexMarketDtoValue::objectList($payload['uin'] ?? null, UinDTO::class),
            cis: YandexMarketDtoValue::objectList($payload['cis'] ?? null, CisDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'uin', 'cis']),
        );
    }
}
