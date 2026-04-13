<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Retry;

interface SleeperInterface
{
    public function sleep(float $seconds): void;
}
