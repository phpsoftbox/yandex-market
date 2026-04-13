<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class ChatsApi extends YandexMarketApiSection
{
    public function getChat(string|int $businessId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/chat', [
            'businessId' => $businessId,
        ]);

        return $this->client->get($path, $query);
    }

    public function getChats(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/chats', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    public function sendFileToChat(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/chats/file/send', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    public function getChatHistory(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/chats/history', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    public function getChatMessage(string|int $businessId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/chats/message', [
            'businessId' => $businessId,
        ]);

        return $this->client->get($path, $query);
    }

    public function sendMessageToChat(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/chats/message', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }

    public function createChat(string|int $businessId, array $payload = [], array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/businesses/{businessId}/chats/new', [
            'businessId' => $businessId,
        ]);

        return $this->client->post($path, $payload, $query);
    }
}
