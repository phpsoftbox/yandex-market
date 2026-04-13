<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Promos;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetPromoDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<ChannelType> $channels
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $id,
        public ?string $name,
        public ?PromoPeriodDTO $period,
        public ?bool $participating,
        public ?GetPromoAssortmentInfoDTO $assortmentInfo,
        public ?GetPromoMechanicsInfoDTO $mechanicsInfo,
        public ?GetPromoBestsellerInfoDTO $bestsellerInfo,
        public array $channels,
        public ?GetPromoConstraintsDTO $constraints,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::string($payload['id'] ?? null),
            name: YandexMarketDtoValue::string($payload['name'] ?? null),
            period: YandexMarketDtoValue::object($payload['period'] ?? null, PromoPeriodDTO::class),
            participating: YandexMarketDtoValue::bool($payload['participating'] ?? null),
            assortmentInfo: YandexMarketDtoValue::object($payload['assortmentInfo'] ?? null, GetPromoAssortmentInfoDTO::class),
            mechanicsInfo: YandexMarketDtoValue::object($payload['mechanicsInfo'] ?? null, GetPromoMechanicsInfoDTO::class),
            bestsellerInfo: YandexMarketDtoValue::object($payload['bestsellerInfo'] ?? null, GetPromoBestsellerInfoDTO::class),
            channels: YandexMarketDtoValue::objectList($payload['channels'] ?? null, ChannelType::class),
            constraints: YandexMarketDtoValue::object($payload['constraints'] ?? null, GetPromoConstraintsDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'name', 'period', 'participating', 'assortmentInfo', 'mechanicsInfo', 'bestsellerInfo', 'channels', 'constraints']),
        );
    }
}
