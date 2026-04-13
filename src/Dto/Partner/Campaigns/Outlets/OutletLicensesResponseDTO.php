<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Outlets;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class OutletLicensesResponseDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<FullOutletLicenseDTO> $licenses
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $licenses,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            licenses: YandexMarketDtoValue::objectList($payload['licenses'] ?? null, FullOutletLicenseDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['licenses']),
        );
    }
}
