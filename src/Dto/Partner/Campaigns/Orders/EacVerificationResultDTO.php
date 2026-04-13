<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class EacVerificationResultDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?EacVerificationStatusType $verificationResult,
        public ?int $attemptsLeft,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            verificationResult: YandexMarketDtoValue::object($payload['verificationResult'] ?? null, EacVerificationStatusType::class),
            attemptsLeft: YandexMarketDtoValue::int($payload['attemptsLeft'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['verificationResult', 'attemptsLeft']),
        );
    }
}
