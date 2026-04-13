<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class GoodsFeedbackApi extends YandexMarketApiSection
{
    public function getGoodsFeedbacks(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/goods-feedback', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    public function getGoodsFeedbackComments(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/goods-feedback/comments', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    public function deleteGoodsFeedbackComment(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/goods-feedback/comments/delete', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    public function updateGoodsFeedbackComment(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/goods-feedback/comments/update', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    public function skipGoodsFeedbacksReaction(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/goods-feedback/skip-reaction', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }
}
