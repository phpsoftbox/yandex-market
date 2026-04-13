<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Dto;

use InvalidArgumentException;

use function is_subclass_of;
use function sprintf;

final class YandexMarketDtoHydrator
{
    /**
     * @template T of YandexMarketDtoInterface
     *
     * @param class-string<T> $dtoClass
     * @param array<string, mixed> $payload
     *
     * @return T
     */
    public static function make(string $dtoClass, array $payload): YandexMarketDtoInterface
    {
        if (!is_subclass_of($dtoClass, YandexMarketDtoInterface::class)) {
            throw new InvalidArgumentException(sprintf(
                'Yandex Market DTO class "%s" must implement %s.',
                $dtoClass,
                YandexMarketDtoInterface::class,
            ));
        }

        return $dtoClass::fromArray($payload);
    }
}
