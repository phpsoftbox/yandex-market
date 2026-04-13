<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\CodeGeneration;

final readonly class YandexMarketOpenApiDtoGeneratorOptions
{
    public function __construct(
        public string $specPath,
        public string $dtoDirectory,
        public string $responseMapPath,
        public bool $cleanDtoDirectory = true,
    ) {
    }
}
