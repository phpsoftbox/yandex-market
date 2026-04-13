# PhpSoftBox YandexMarket

## About
`phpsoftbox/yandex-market` — API-клиент Yandex Market Partner API на базе PSR-18.

Компонент включает:
- `YandexMarketApiClient` с auth через `Api-Key` или `Authorization: Bearer`;
- универсальные HTTP-методы `get/post/put/patch/delete/request`;
- helper версии API: `v1()` и `v2()`;
- ответы в `YandexMarketApiResponse`, совместимом с `PhpSoftBox\Collection\Collection`;
- `YandexMarketApiResponse::makeDto()` для явного преобразования ответа в DTO после генерации карты;
- `YandexMarketException` со статусом и payload.

## Источник спецификации
- документация: `https://yandex.ru/dev/market/partner-api/doc/ru/concepts/openapi`
- OpenAPI git: `https://github.com/yandex-market/yandex-market-partner-api` (`openapi/openapi.yaml`)

## Quick Start
```php
use PhpSoftBox\Http\Message\RequestFactory;
use PhpSoftBox\Http\Message\StreamFactory;
use PhpSoftBox\YandexMarket\YandexMarketApiClient;

$client = new YandexMarketApiClient(
    token: $_ENV['YANDEX_MARKET_API_KEY'],
    httpClient: $psr18Client,
    requestFactory: new RequestFactory(),
    streamFactory: new StreamFactory(),
);

$orders = $client->v2('campaigns/123')->get('/orders', [
    'limit' => 50,
]);
```

## Повтор запросов при превышении лимита

Клиент автоматически повторяет запросы после rate-limit ответов Yandex Market:

- `420 Enhance Your Calm`, используемого актуальным Partner API;
- `429 Too Many Requests` для совместимости с другими контурами API.

Повтор разрешён для всех HTTP-методов и выполняется только после фактически полученного
rate-limit ответа. Сетевые ошибки, timeout и остальные HTTP-статусы сохраняют прежнее
поведение.

По умолчанию выполняется не более четырёх попыток, включая первоначальный запрос.
Без корректного заголовка применяются задержки 1, 2 и 4 секунды. Клиент понимает:

- `Retry-After` — секунды либо HTTP-date;
- `X-RateLimit-Retry` — секунды;
- `X-RateLimit-Resource-Until` — абсолютную дату RFC822, после которой ресурс снова
  станет доступен.

Если сервер передал несколько ограничений, выбирается наибольшая задержка. Для
`X-RateLimit-Resource-Until` она может быть длительной. Если синхронному процессу
нельзя столько ждать, установите `maxAttempts: 1` или исключите запрос через policy.

Тело каждого повтора создаётся заново из сохранённого JSON, поэтому запрос полностью
воспроизводится даже после чтения предыдущего body stream.

### Настройка retry

```php
use PhpSoftBox\YandexMarket\YandexMarketApiClient;
use PhpSoftBox\YandexMarket\Retry\RateLimitRetryOptions;
use PhpSoftBox\YandexMarket\Retry\YandexMarketRetryEvent;

$client = new YandexMarketApiClient(
    token: $token,
    httpClient: $psr18Client,
    requestFactory: $requestFactory,
    streamFactory: $streamFactory,
    rateLimitRetry: new RateLimitRetryOptions(
        maxAttempts: 4,
        onRetry: static function (YandexMarketRetryEvent $event): void {
            // Доступны attempt, delaySeconds, method, endpoint и statusCode.
        },
    ),
);
```

Для тестов можно передать `SleeperInterface`. Точечные исключения настраиваются через
`CallbackRetryableRequestPolicy`, а сложные правила — собственной реализацией
`RetryableRequestPolicyInterface`:

```php
use PhpSoftBox\YandexMarket\Retry\CallbackRetryableRequestPolicy;
use Psr\Http\Message\RequestInterface;

$retry = new RateLimitRetryOptions(
    requestPolicy: new CallbackRetryableRequestPolicy(
        static fn (RequestInterface $request): bool => $request->getUri()->getPath() !== '/custom/non-retryable',
    ),
);
```

## DTO ответы
Wrapper-методы остаются совместимыми с `Collection`. Если для endpoint-а есть сгенерированный DTO, response можно явно преобразовать:

```php
$orders = $client->v2('campaigns/123')->get('/orders')->makeDto();
```

## Генерация DTO
Генератор ожидает локальный OpenAPI YAML/JSON файл. По умолчанию используется `docs/openapi.yaml`:

```bash
vendor/bin/psb yandex-market:openapi:generate-dto
```

Можно указать путь явно:

```bash
vendor/bin/psb yandex-market:openapi:generate-dto --spec=docs/openapi.yaml
```

Команда обновляет `src/Dto` и `src/Dto/YandexMarketResponseDtoMap.php`. Wrapper-классы не меняются: основной контракт остается `YandexMarketApiResponse`/`Collection`, а DTO создаются явно через `makeDto()`.
