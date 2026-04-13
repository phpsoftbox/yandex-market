<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Outlets;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class FullOutletLicenseDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?LicenseCheckStatusType $checkStatus,
        public ?string $checkComment,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            checkStatus: YandexMarketDtoValue::object($payload['checkStatus'] ?? null, LicenseCheckStatusType::class),
            checkComment: YandexMarketDtoValue::string($payload['checkComment'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['checkStatus', 'checkComment']),
        );
    }
}
