<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\CodeGeneration;

use PhpSoftBox\CodeGenerator\OpenApi\OpenApiDtoGenerator;
use PhpSoftBox\CodeGenerator\OpenApi\OpenApiDtoGeneratorDocument;
use PhpSoftBox\CodeGenerator\OpenApi\OpenApiDtoGeneratorOptions;
use PhpSoftBox\CodeGenerator\OpenApi\OpenApiDtoGeneratorResult;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;
use RuntimeException;
use Symfony\Component\Yaml\Yaml;

use function file_get_contents;
use function is_array;
use function is_file;
use function json_decode;
use function pathinfo;
use function str_ends_with;
use function strtolower;

use const JSON_THROW_ON_ERROR;
use const PATHINFO_EXTENSION;

final readonly class YandexMarketOpenApiDtoGenerator
{
    public function __construct(
        private OpenApiDtoGenerator $generator = new OpenApiDtoGenerator(),
    ) {
    }

    public function generate(YandexMarketOpenApiDtoGeneratorOptions $options): OpenApiDtoGeneratorResult
    {
        return $this->generator->generate(new OpenApiDtoGeneratorOptions(
            documents: [
                new OpenApiDtoGeneratorDocument('partner', $this->readSpec($options->specPath)),
            ],
            dtoDirectory: $options->dtoDirectory,
            dtoNamespace: 'PhpSoftBox\\YandexMarket\\Dto',
            dtoInterface: YandexMarketDtoInterface::class,
            dtoValueClass: YandexMarketDtoValue::class,
            responseMapPath: $options->responseMapPath,
            responseMapNamespace: 'PhpSoftBox\\YandexMarket\\Dto',
            responseMapClassName: 'YandexMarketResponseDtoMap',
            normalizePathFunctionName: 'normalizeYandexMarketPath',
            normalizePatternFunctionName: 'normalizeYandexMarketPathPattern',
            generatedComment: 'Yandex Market OpenAPI DTO',
            cleanDtoDirectory: $options->cleanDtoDirectory,
        ));
    }

    /**
     * @return array<string, mixed>
     */
    private function readSpec(string $path): array
    {
        if (!is_file($path)) {
            throw new RuntimeException('Yandex Market OpenAPI spec file is not found: ' . $path);
        }

        $contents  = (string) file_get_contents($path);
        $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
        $data      = str_ends_with($extension, 'json')
            ? json_decode($contents, true, 512, JSON_THROW_ON_ERROR)
            : Yaml::parse($contents);

        if (!is_array($data)) {
            throw new RuntimeException('Yandex Market OpenAPI spec is invalid: ' . $path);
        }

        return $data;
    }
}
