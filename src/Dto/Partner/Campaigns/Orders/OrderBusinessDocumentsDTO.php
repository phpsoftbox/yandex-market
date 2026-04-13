<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderBusinessDocumentsDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?DocumentDTO $upd,
        public ?DocumentDTO $ukd,
        public ?DocumentDTO $torgTwelve,
        public ?DocumentDTO $sf,
        public ?DocumentDTO $ksf,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            upd: YandexMarketDtoValue::object($payload['upd'] ?? null, DocumentDTO::class),
            ukd: YandexMarketDtoValue::object($payload['ukd'] ?? null, DocumentDTO::class),
            torgTwelve: YandexMarketDtoValue::object($payload['torgTwelve'] ?? null, DocumentDTO::class),
            sf: YandexMarketDtoValue::object($payload['sf'] ?? null, DocumentDTO::class),
            ksf: YandexMarketDtoValue::object($payload['ksf'] ?? null, DocumentDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['upd', 'ukd', 'torgTwelve', 'sf', 'ksf']),
        );
    }
}
