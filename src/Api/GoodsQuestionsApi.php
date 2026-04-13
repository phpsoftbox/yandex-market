<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class GoodsQuestionsApi extends YandexMarketApiSection
{
    public function getGoodsQuestions(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v1/businesses/{businessId}/goods-questions', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    public function getGoodsQuestionAnswers(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v1/businesses/{businessId}/goods-questions/answers', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    public function updateGoodsQuestionTextEntity(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v1/businesses/{businessId}/goods-questions/update', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }
}
