<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Auth\Token;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ApiKeyDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<ApiKeyScopeType> $authScopes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $name,
        public array $authScopes,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            name: YandexMarketDtoValue::string($payload['name'] ?? null),
            authScopes: YandexMarketDtoValue::objectList($payload['authScopes'] ?? null, ApiKeyScopeType::class),
            extra: YandexMarketDtoValue::extra($payload, ['name', 'authScopes']),
        );
    }
}
