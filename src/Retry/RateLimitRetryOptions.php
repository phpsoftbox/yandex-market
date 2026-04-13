<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Retry;

use Closure;
use InvalidArgumentException;

final readonly class RateLimitRetryOptions
{
    /** @var (Closure(YandexMarketRetryEvent): void)|null */
    public ?Closure $onRetry;

    /**
     * @param callable(YandexMarketRetryEvent): void|null $onRetry
     */
    public function __construct(
        public int $maxAttempts = 4,
        public ?RetryableRequestPolicyInterface $requestPolicy = null,
        public ?SleeperInterface $sleeper = null,
        ?callable $onRetry = null,
    ) {
        if ($maxAttempts < 1) {
            throw new InvalidArgumentException('Yandex Market retry maxAttempts must be at least 1.');
        }

        $this->onRetry = $onRetry === null ? null : Closure::fromCallable($onRetry);
    }
}
