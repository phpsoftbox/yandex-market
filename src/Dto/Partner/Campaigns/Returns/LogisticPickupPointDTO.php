<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Returns;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class LogisticPickupPointDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?string $name,
        public ?PickupAddressDTO $address,
        public ?string $instruction,
        public ?LogisticPointType $type,
        public ?int $logisticPartnerId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            name: YandexMarketDtoValue::string($payload['name'] ?? null),
            address: YandexMarketDtoValue::object($payload['address'] ?? null, PickupAddressDTO::class),
            instruction: YandexMarketDtoValue::string($payload['instruction'] ?? null),
            type: YandexMarketDtoValue::object($payload['type'] ?? null, LogisticPointType::class),
            logisticPartnerId: YandexMarketDtoValue::int($payload['logisticPartnerId'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'name', 'address', 'instruction', 'type', 'logisticPartnerId']),
        );
    }
}
