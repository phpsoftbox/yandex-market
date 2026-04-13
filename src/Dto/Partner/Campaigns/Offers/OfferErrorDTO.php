<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Offers;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OfferErrorDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $message,
        public ?string $comment,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            message: YandexMarketDtoValue::string($payload['message'] ?? null),
            comment: YandexMarketDtoValue::string($payload['comment'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['message', 'comment']),
        );
    }
}
