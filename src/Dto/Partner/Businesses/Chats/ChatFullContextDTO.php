<?php

declare(strict_types=1);

/**
 * @generated Yandex Market OpenAPI DTO
 */

namespace PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Chats;

use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\CampaignId;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoInterface;
use PhpSoftBox\YandexMarket\Dto\YandexMarketDtoValue;

final readonly class ChatFullContextDTO implements YandexMarketDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ChatContextType $type,
        public ?ChatCustomerDTO $customer,
        public ?CampaignId $campaignId,
        public ?int $orderId,
        public ?int $returnId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            type: YandexMarketDtoValue::object($payload['type'] ?? null, ChatContextType::class),
            customer: YandexMarketDtoValue::object($payload['customer'] ?? null, ChatCustomerDTO::class),
            campaignId: YandexMarketDtoValue::object($payload['campaignId'] ?? null, CampaignId::class),
            orderId: YandexMarketDtoValue::int($payload['orderId'] ?? null),
            returnId: YandexMarketDtoValue::int($payload['returnId'] ?? null),
            extra: YandexMarketDtoValue::extra($payload, ['type', 'customer', 'campaignId', 'orderId', 'returnId']),
        );
    }
}
