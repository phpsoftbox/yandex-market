<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Chats;

use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class GetChatInfoDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $chatId,
        public ?int $orderId,
        public ?ChatFullContextDTO $context,
        public ?ChatType $type,
        public ?ChatStatusType $status,
        public ?string $createdAt,
        public ?string $updatedAt,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            chatId: YandexMarketDtoValue::int($payload['chatId'] ?? null),
            orderId: YandexMarketDtoValue::int($payload['orderId'] ?? null),
            context: YandexMarketDtoValue::object($payload['context'] ?? null, ChatFullContextDTO::class),
            type: YandexMarketDtoValue::object($payload['type'] ?? null, ChatType::class),
            status: YandexMarketDtoValue::object($payload['status'] ?? null, ChatStatusType::class),
            createdAt: YandexMarketDtoValue::string($payload['createdAt'] ?? null),
            updatedAt: YandexMarketDtoValue::string($payload['updatedAt'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['chatId', 'orderId', 'context', 'type', 'status', 'createdAt', 'updatedAt']),
        );
    }
}
