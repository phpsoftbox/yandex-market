<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Dto;

final readonly class YandexMarketEmptyDto implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self($payload);
    }
}
