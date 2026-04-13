<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Outlets;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OutletLicenseDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?int $outletId,
        public ?LicenseType $licenseType,
        public ?string $number,
        public ?string $dateOfIssue,
        public ?string $dateOfExpiry,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: YandexMarketDtoValue::int($payload['id'] ?? null),
            outletId: YandexMarketDtoValue::int($payload['outletId'] ?? null),
            licenseType: YandexMarketDtoValue::object($payload['licenseType'] ?? null, LicenseType::class),
            number: YandexMarketDtoValue::string($payload['number'] ?? null),
            dateOfIssue: YandexMarketDtoValue::string($payload['dateOfIssue'] ?? null),
            dateOfExpiry: YandexMarketDtoValue::string($payload['dateOfExpiry'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['id', 'outletId', 'licenseType', 'number', 'dateOfIssue', 'dateOfExpiry']),
        );
    }
}
