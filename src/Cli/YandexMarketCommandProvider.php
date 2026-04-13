<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Cli;

use PhpSoftBox\CliApp\Command\Command;
use PhpSoftBox\CliApp\Command\CommandRegistryInterface;
use PhpSoftBox\CliApp\Command\OptionDefinition;
use PhpSoftBox\CliApp\Loader\CommandProviderInterface;

final class YandexMarketCommandProvider implements CommandProviderInterface
{
    public function register(CommandRegistryInterface $registry): void
    {
        $registry->register(Command::define(
            name: 'yandex-market:openapi:generate-dto',
            description: 'Сгенерировать DTO Yandex Market API из локального OpenAPI файла',
            signature: [
                new OptionDefinition(
                    name: 'spec',
                    short: 's',
                    description: 'Путь к OpenAPI YAML/JSON файлу',
                    required: false,
                    default: 'docs/openapi.yaml',
                    type: 'string',
                ),
                new OptionDefinition(
                    name: 'output',
                    short: 'o',
                    description: 'Базовая директория DTO',
                    required: false,
                    default: 'src/Dto',
                    type: 'string',
                ),
                new OptionDefinition(
                    name: 'map',
                    short: null,
                    description: 'Файл карты response DTO',
                    required: false,
                    default: 'src/Dto/YandexMarketResponseDtoMap.php',
                    type: 'string',
                ),
                new OptionDefinition(
                    name: 'keep-existing-dto',
                    short: null,
                    description: 'Не очищать директорию DTO перед генерацией',
                    flag: true,
                    required: false,
                    default: false,
                    type: 'bool',
                ),
            ],
            handler: GenerateOpenApiDtoHandler::class,
        ));
    }
}
