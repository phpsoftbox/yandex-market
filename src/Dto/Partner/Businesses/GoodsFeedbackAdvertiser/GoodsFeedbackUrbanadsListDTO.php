<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsFeedbackAdvertiser;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\PackagingForwardScrollingPagerDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GoodsFeedbackUrbanadsListDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<GoodsFeedbackUrbanadsDTO> $feedbacks
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $feedbacks,
        public ?PackagingForwardScrollingPagerDTO $paging,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            feedbacks: YandexMarketDtoValue::objectList($payload['feedbacks'] ?? null, GoodsFeedbackUrbanadsDTO::class),
            paging: YandexMarketDtoValue::object($payload['paging'] ?? null, PackagingForwardScrollingPagerDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['feedbacks', 'paging']),
        );
    }
}
