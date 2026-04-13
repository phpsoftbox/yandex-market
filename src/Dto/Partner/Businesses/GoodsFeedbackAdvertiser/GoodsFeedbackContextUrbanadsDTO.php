<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsFeedbackAdvertiser;

use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Settings\BusinessId;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\Url;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GoodsFeedbackContextUrbanadsDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $offerName,
        public ?Url $pictureUrl,
        public ?BusinessId $businessId,
        public ?string $businessName,
        public ?string $brandId,
        public ?string $brandName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            offerName: YandexMarketDtoValue::string($payload['offerName'] ?? null),
            pictureUrl: YandexMarketDtoValue::object($payload['pictureUrl'] ?? null, Url::class),
            businessId: YandexMarketDtoValue::object($payload['businessId'] ?? null, BusinessId::class),
            businessName: YandexMarketDtoValue::string($payload['businessName'] ?? null),
            brandId: YandexMarketDtoValue::string($payload['brandId'] ?? null),
            brandName: YandexMarketDtoValue::string($payload['brandName'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['offerName', 'pictureUrl', 'businessId', 'businessName', 'brandId', 'brandName']),
        );
    }
}
