<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Tests;

use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\YandexMarket\Retry\CallbackRetryableRequestPolicy;
use PhpSoftBox\YandexMarket\Retry\RateLimitRetryOptions;
use PhpSoftBox\YandexMarket\Retry\YandexMarketRetryEvent;
use PhpSoftBox\YandexMarket\Tests\Support\CreatesYandexMarketClient;
use PhpSoftBox\YandexMarket\Tests\Support\RecordingSleeper;
use PhpSoftBox\YandexMarket\YandexMarketException;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

use function gmdate;
use function time;

use const DATE_RFC2822;

final class YandexMarketApiClientRateLimitRetryTest extends TestCase
{
    use CreatesYandexMarketClient;

    public function testRetries420UsingRetryAfterHeader(): void
    {
        $sleeper = new RecordingSleeper();

        [$client, $httpClient] = $this->createClient(
            [
                new Response(420, ['Retry-After' => '2'], '{"message":"rate limited"}'),
                new Response(200, [], '{"result":{"orders":[]}}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(sleeper: $sleeper),
        );

        $client->post('/v2/campaigns/1/orders', ['limit' => 50]);

        self::assertCount(2, $httpClient->requests());
        self::assertSame([2.0], $sleeper->delays());
    }

    public function testRetriesLegacy429(): void
    {
        $sleeper = new RecordingSleeper();

        [$client, $httpClient] = $this->createClient(
            [
                new Response(429, [], '{"message":"rate limited"}'),
                new Response(200, [], '{"result":{}}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(sleeper: $sleeper),
        );

        $client->get('/v2/campaigns');

        self::assertCount(2, $httpClient->requests());
        self::assertSame([1.0], $sleeper->delays());
    }

    public function testUsesResourceUntilHeader(): void
    {
        $sleeper = new RecordingSleeper();
        $until   = gmdate(DATE_RFC2822, time() + 30);

        [$client] = $this->createClient(
            [
                new Response(420, ['X-RateLimit-Resource-Until' => $until], '{"message":"rate limited"}'),
                new Response(200, [], '{"result":{}}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(sleeper: $sleeper),
        );

        $client->get('/v2/campaigns');

        self::assertCount(1, $sleeper->delays());
        self::assertGreaterThanOrEqual(29.0, $sleeper->delays()[0]);
        self::assertLessThanOrEqual(30.0, $sleeper->delays()[0]);
    }

    public function testUsesFallbackBackoffAndThrowsLastRateLimitResponse(): void
    {
        $sleeper = new RecordingSleeper();

        [$client, $httpClient] = $this->createClient(
            [
                new Response(420, [], '{"message":"first"}'),
                new Response(420, ['Retry-After' => 'invalid'], '{"message":"second"}'),
                new Response(420, [], '{"message":"third"}'),
                new Response(420, [], '{"message":"last","requestId":"final"}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(sleeper: $sleeper),
        );

        try {
            $client->get('/v2/campaigns');
            self::fail('The final rate-limit response must throw YandexMarketException.');
        } catch (YandexMarketException $exception) {
            self::assertSame(420, $exception->statusCode());
            self::assertSame('last', $exception->getMessage());
            self::assertSame('final', $exception->payload()['requestId'] ?? null);
        }

        self::assertCount(4, $httpClient->requests());
        self::assertSame([1.0, 2.0, 4.0], $sleeper->delays());
    }

    public function testRetriesMutatingRequestAndReplaysConsumedBody(): void
    {
        $sleeper = new RecordingSleeper();

        [$client, $httpClient] = $this->createClient(
            [
                new Response(420, [], '{"message":"retry"}'),
                new Response(200, [], '{"result":{}}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(sleeper: $sleeper),
            consumeRequestBodies: true,
        );

        $client->put('/v2/campaigns/1/offers/stocks', ['skus' => [['sku' => 'SKU-1']]]);

        self::assertSame(
            [
                '{"skus":[{"sku":"SKU-1"}]}',
                '{"skus":[{"sku":"SKU-1"}]}',
            ],
            $httpClient->requestBodies(),
        );
        self::assertSame([1.0], $sleeper->delays());
    }

    public function testCustomPolicyCanExcludeRequest(): void
    {
        $sleeper = new RecordingSleeper();

        [$client, $httpClient] = $this->createClient(
            [
                new Response(420, [], '{"message":"not retried"}'),
                new Response(200, [], '{"result":{}}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(
                requestPolicy: new CallbackRetryableRequestPolicy(
                    static fn (RequestInterface $request): bool => $request->getUri()->getPath() !== '/v2/campaigns/1/offers/stocks',
                ),
                sleeper: $sleeper,
            ),
        );

        try {
            $client->put('/v2/campaigns/1/offers/stocks', ['skus' => []]);
            self::fail('The custom policy must disable retry.');
        } catch (YandexMarketException $exception) {
            self::assertSame(420, $exception->statusCode());
        }

        self::assertCount(1, $httpClient->requests());
        self::assertSame([], $sleeper->delays());
    }

    public function testRetryCallbackReceivesActualStatusAndContext(): void
    {
        $sleeper  = new RecordingSleeper();
        $events   = [];
        [$client] = $this->createClient(
            [
                new Response(420, ['Retry-After' => '3'], '{"message":"retry"}'),
                new Response(200, [], '{"result":{}}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(
                sleeper: $sleeper,
                onRetry: static function (YandexMarketRetryEvent $event) use (&$events): void {
                    $events[] = $event;
                },
            ),
        );

        $client->get('/v2/campaigns');

        self::assertCount(1, $events);
        self::assertSame(2, $events[0]->attempt);
        self::assertSame(3.0, $events[0]->delaySeconds);
        self::assertSame('GET', $events[0]->method);
        self::assertSame('/v2/campaigns', $events[0]->endpoint);
        self::assertSame(420, $events[0]->statusCode);
    }

    public function testDoesNotRetryOtherStatuses(): void
    {
        $sleeper = new RecordingSleeper();

        [$client, $httpClient] = $this->createClient(
            [
                new Response(500, [], '{"message":"failed"}'),
                new Response(200, [], '{"result":{}}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(sleeper: $sleeper),
        );

        try {
            $client->get('/v2/campaigns');
            self::fail('A non-rate-limit response must retain existing behavior.');
        } catch (YandexMarketException $exception) {
            self::assertSame(500, $exception->statusCode());
        }

        self::assertCount(1, $httpClient->requests());
        self::assertSame([], $sleeper->delays());
    }
}
