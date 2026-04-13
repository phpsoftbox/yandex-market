<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket;

use PhpSoftBox\Collection\Collection;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoHydrator;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use RuntimeException;

/**
 * @template TKey of array-key
 * @template TValue
 *
 * @extends Collection<TKey, TValue>
 */
final class YandexMarketApiResponse extends Collection
{
    /**
     * @param array<TKey, TValue> $items
     * @param class-string<YandexMarketDtoInterface>|null $defaultDtoClass
     */
    public function __construct(
        array $items = [],
        private readonly ?string $defaultDtoClass = null,
    ) {
        parent::__construct($items);
    }

    /**
     * @template T of YandexMarketDtoInterface
     *
     * @param class-string<T>|null $dtoClass
     *
     * @return T
     */
    public function makeDto(?string $dtoClass = null): YandexMarketDtoInterface
    {
        $dtoClass ??= $this->defaultDtoClass;
        if ($dtoClass === null) {
            throw new RuntimeException('Yandex Market DTO class is not specified for this response.');
        }

        return YandexMarketDtoHydrator::make($dtoClass, $this->all());
    }
}
