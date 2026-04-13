<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\Url;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OfferMediaFileDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?Url $url,
        public ?string $title,
        public ?MediaFileUploadStateType $uploadState,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            url: YandexMarketDtoValue::object($payload['url'] ?? null, Url::class),
            title: YandexMarketDtoValue::string($payload['title'] ?? null),
            uploadState: YandexMarketDtoValue::object($payload['uploadState'] ?? null, MediaFileUploadStateType::class),
            extra: YandexMarketDtoValue::extra($payload, ['url', 'title', 'uploadState']),
        );
    }
}
