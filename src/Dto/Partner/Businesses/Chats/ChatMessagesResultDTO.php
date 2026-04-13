<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Chats;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\PackagingForwardScrollingPagerDTO;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ChatMessagesResultDTO implements YandexMarketDtoInterface
{
    /**
     * @param list<ChatMessageDTO> $messages
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $orderId,
        public ?ChatFullContextDTO $context,
        public array $messages,
        public ?PackagingForwardScrollingPagerDTO $paging,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            orderId: YandexMarketDtoValue::int($payload['orderId'] ?? null),
            context: YandexMarketDtoValue::object($payload['context'] ?? null, ChatFullContextDTO::class),
            messages: YandexMarketDtoValue::objectList($payload['messages'] ?? null, ChatMessageDTO::class),
            paging: YandexMarketDtoValue::object($payload['paging'] ?? null, PackagingForwardScrollingPagerDTO::class),
            extra: YandexMarketDtoValue::extra($payload, ['orderId', 'context', 'messages', 'paging']),
        );
    }
}
