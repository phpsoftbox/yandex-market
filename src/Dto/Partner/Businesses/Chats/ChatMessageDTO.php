<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Chats;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ChatMessageDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<ChatMessagePayloadDTO> $payload
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $messageId,
        public ?string $createdAt,
        public ?ChatMessageSenderType $sender,
        public ?string $message,
        public array $payload,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            messageId: YandexMarketDtoValue::int($payload['messageId'] ?? null),
            createdAt: YandexMarketDtoValue::string($payload['createdAt'] ?? null),
            sender: YandexMarketDtoValue::object($payload['sender'] ?? null, ChatMessageSenderType::class),
            message: YandexMarketDtoValue::string($payload['message'] ?? null),
            payload: YandexMarketDtoValue::objectList($payload['payload'] ?? null, ChatMessagePayloadDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['messageId', 'createdAt', 'sender', 'message', 'payload']),
        );
    }
}
