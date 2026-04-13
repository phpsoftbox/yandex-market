<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OrderBuyerBasicInfoDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $id,
        public ?string $lastName,
        public ?string $firstName,
        public ?string $middleName,
        public ?OrderBuyerType $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::string($payload['id'] ?? null),
            lastName: YandexMarketDtoValue::string($payload['lastName'] ?? null),
            firstName: YandexMarketDtoValue::string($payload['firstName'] ?? null),
            middleName: YandexMarketDtoValue::string($payload['middleName'] ?? null),
            type: YandexMarketDtoValue::object($payload['type'] ?? null, OrderBuyerType::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'lastName', 'firstName', 'middleName', 'type']),
        );
    }
}
