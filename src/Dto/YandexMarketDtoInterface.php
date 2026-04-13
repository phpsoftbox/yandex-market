<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Dto;

interface YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $payload
     */
    public static function fromArray(array $payload): static;
}
