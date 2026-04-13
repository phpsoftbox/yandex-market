<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiClient;

use function rawurlencode;
use function str_replace;

abstract class YandexMarketApiSection
{
    public function __construct(
        protected readonly YandexMarketApiClient $client,
    ) {
    }

    /**
     * @param array<string, string|int> $parameters
     */
    protected function resolvePath(string $path, array $parameters = []): string
    {
        if ($parameters === []) {
            return $path;
        }

        $search  = [];
        $replace = [];
        foreach ($parameters as $name => $value) {
            $search[]  = '{' . $name . '}';
            $replace[] = rawurlencode((string) $value);
        }

        return str_replace($search, $replace, $path);
    }
}
