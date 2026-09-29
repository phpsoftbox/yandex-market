<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Tests;

use InvalidArgumentException;
use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\YandexMarket\Retry\RateLimitRetryOptions;
use PhpSoftBox\YandexMarket\Tests\Support\CreatesYandexMarketClient;
use PhpSoftBox\YandexMarket\Tests\Support\RecordingSleeper;
use PhpSoftBox\YandexMarket\YandexMarketApiClient;
use PhpSoftBox\YandexMarket\YandexMarketException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(YandexMarketApiClient::class)]
#[CoversClass(RateLimitRetryOptions::class)]
#[CoversMethod(YandexMarketApiClient::class, 'request')]
#[CoversMethod(RateLimitRetryOptions::class, '__construct')]
final class YandexMarketApiClientRetryDelayBudgetTest extends TestCase
{
    use CreatesYandexMarketClient;

    /**
     * Проверим, что задержка из заголовка больше maxDelaySeconds не выполняется: клиент сразу
     * возвращает ошибку 420 вместо многоминутного сна воркера.
     *
     * @see YandexMarketApiClient::request()
     */
    #[Test]
    public function longProviderDelayIsNotAwaited(): void
    {
        $sleeper = new RecordingSleeper();

        [$client, $httpClient] = $this->createClient(
            [
                new Response(420, ['X-RateLimit-Retry' => '3600'], '{"message":"cooldown"}'),
                new Response(200, [], '{"result":{}}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(sleeper: $sleeper),
        );

        try {
            $client->post('/v2/campaigns/1/offers');
            self::fail('Rate limit response must throw YandexMarketException.');
        } catch (YandexMarketException $exception) {
            // Исключение несёт статус и сообщение последнего ответа.
            self::assertSame(420, $exception->statusCode());
            self::assertSame('cooldown', $exception->getMessage());
        }

        // Повтора и ожидания не было.
        self::assertCount(1, $httpClient->requests());
        self::assertSame([], $sleeper->delays());
    }

    /**
     * Проверим, что сумма задержек одного вызова ограничена maxTotalDelaySeconds.
     *
     * @see YandexMarketApiClient::request()
     */
    #[Test]
    public function totalDelayBudgetStopsRetries(): void
    {
        $sleeper = new RecordingSleeper();

        [$client, $httpClient] = $this->createClient(
            [
                new Response(420, ['Retry-After' => '20'], '{"message":"first"}'),
                new Response(420, ['Retry-After' => '20'], '{"message":"second"}'),
                new Response(200, [], '{"result":{}}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(sleeper: $sleeper, maxTotalDelaySeconds: 30.0),
        );

        try {
            $client->post('/v2/campaigns/1/offers');
            self::fail('Exhausted delay budget must throw YandexMarketException.');
        } catch (YandexMarketException $exception) {
            self::assertSame('second', $exception->getMessage());
        }

        // Первая пауза 20 с уложилась в бюджет, вторая (20 + 20 > 30) — нет.
        self::assertCount(2, $httpClient->requests());
        self::assertSame([20.0], $sleeper->delays());
    }

    /**
     * Проверим, что null отключает ограничение: длительная задержка сервера выполняется.
     *
     * @see YandexMarketApiClient::request()
     */
    #[Test]
    public function nullBudgetsAllowLongDelay(): void
    {
        $sleeper = new RecordingSleeper();

        [$client] = $this->createClient(
            [
                new Response(420, ['X-RateLimit-Retry' => '3600'], '{"message":"cooldown"}'),
                new Response(200, [], '{"result":{}}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(
                sleeper: $sleeper,
                maxDelaySeconds: null,
                maxTotalDelaySeconds: null,
            ),
        );

        $client->post('/v2/campaigns/1/offers');

        self::assertSame([3600.0], $sleeper->delays());
    }

    /**
     * Проверим, что отрицательный бюджет задержки отклоняется при создании опций.
     *
     * @see RateLimitRetryOptions::__construct()
     */
    #[Test]
    public function negativeDelayBudgetIsRejected(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new RateLimitRetryOptions(maxDelaySeconds: -1.0);
    }
}
