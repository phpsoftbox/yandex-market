<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\OrderCourierDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class BusinessOrderTransferDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?OrderCourierDTO $courier,
        public ?BusinessOrderEacDTO $eac,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            courier: YandexMarketDtoValue::object($payload['courier'] ?? null, OrderCourierDTO::class),
            eac: YandexMarketDtoValue::object($payload['eac'] ?? null, BusinessOrderEacDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['courier', 'eac']),
        );
    }
}
