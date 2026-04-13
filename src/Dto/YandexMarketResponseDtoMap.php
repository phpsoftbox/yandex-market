<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Dto;

use PhpSoftBox\YandexMarket\Dto\Partner\Auth\Token\GetTokenInfoResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Bids\GetBidsInfoResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Bids\GetBidsRecommendationsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Chat\GetChatResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Chats\CreateChatResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Chats\GetChatHistoryResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Chats\GetChatMessageResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Chats\GetChatsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsFeedback\GetGoodsFeedbackCommentsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsFeedback\GetGoodsFeedbackResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsFeedback\UpdateGoodsFeedbackCommentResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsFeedbackAdvertiser\GetGoodsFeedbackUrbanadsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsQuestions\GetAnswersResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsQuestions\GetQuestionsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\GoodsQuestions\UpdateGoodsQuestionTextEntityResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\LogisticsPoints\GetLogisticPointsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferCards\GetOfferCardsContentStatusResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferCards\UpdateOfferContentResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings\AddOffersToArchiveResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings\DeleteOffersFromArchiveResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings\DeleteOffersResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings\GenerateOfferBarcodesResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings\GetOfferMappingsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferMappings\UpdateOfferMappingsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\OfferPrices\GetDefaultPricesResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Offers\GetOfferRecommendationsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Operations\GetOperationsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Orders\GetBusinessOrdersResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\PriceQuarantine\GetQuarantineOffersResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Promos\DeletePromoOffersResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Promos\GetPromoOffersResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Promos\GetPromosResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Promos\UpdatePromoOffersResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Ratings\GetQualityRatingResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Returns\GetReturnAvailableDecisionsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Settings\GetBusinessSettingsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Warehouses\GetPagedWarehousesResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Businesses\Warehouses\GetWarehousesResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\DeliveryOptions\GetDeliveryOptionsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\FirstMile\GetShipmentOrdersInfoResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\FirstMile\GetShipmentResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\FirstMile\SearchShipmentsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\GetCampaignResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\GetCampaignsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\HiddenOffers\GetHiddenOffersResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\OfferPrices\GetPricesByOfferIdsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\OfferPrices\GetPricesResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Offers\DeleteCampaignOffersResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Offers\GetCampaignOffersResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Offers\GetWarehouseStocksResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Offers\Partner200;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\CreateOrderResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\EmptyApiResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\GetBusinessBuyerInfoResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\GetBusinessDocumentsInfoResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\GetOrderBuyerInfoResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\GetOrderIdentifiersStatusResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\GetOrderLabelsDataResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\GetOrderResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\GetOrdersResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\GetOrderUpdateOptionsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\GetReturnResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\Partner400;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\ProvideOrderItemIdentifiersResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\SetOrderBoxLayoutResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\SetOrderShipmentBoxesResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\UpdateOrderResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\UpdateOrderStatusesResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\UpdateOrderStatusResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Orders\VerifyOrderEacResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Outlets\CreateOutletResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Outlets\GetOutletLicensesResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Outlets\GetOutletResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Outlets\GetOutletsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Ratings\GetQualityRatingDetailsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\ReturnDeliveryOptions\GetReturnDeliveryOptionsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Returns\CancelReturnResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Returns\CreateReturnResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Returns\GetReturnsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Settings\GetCampaignSettingsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Shipments\ApiClientDataErrorResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Stats\GetGoodsStatsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Stats\GetOrdersStatsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\SupplyRequests\GetSupplyRequestDocumentsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\SupplyRequests\GetSupplyRequestItemsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\SupplyRequests\GetSupplyRequestsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Campaigns\Warehouse\UpdateWarehouseStatusResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Categories\MaxSaleQuantum\GetCategoriesMaxSaleQuantumResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Categories\Tree\GetCategoriesResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Category\Parameters\GetCategoryContentParametersResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Delivery\Services\GetDeliveryServicesResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Regions\Children\GetRegionWithChildrenResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Regions\Countries\GetRegionsCodesResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Regions\GetRegionByIdResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Regions\GetRegionsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Reports\Info\GetReportInfoResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Reports\UnitedNetting\GenerateReportResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Tariffs\Calculate\CalculateTariffsResponse;
use PhpSoftBox\YandexMarket\Dto\Partner\Warehouses\GetFulfillmentWarehousesResponse;

use function preg_match;
use function preg_quote;
use function preg_replace;
use function strtoupper;
use function trim;

final class YandexMarketResponseDtoMap
{
    /**
     * @var array<string, class-string<YandexMarketDtoInterface>>
     */
    private const MAP = [
        'DELETE /v2/campaigns/{campaignId}/outlets/licenses'                                                     => EmptyApiResponse::class,
        'DELETE /v2/campaigns/{campaignId}/outlets/{outletId}'                                                   => EmptyApiResponse::class,
        'GET /v2/businesses/{businessId}/chat'                                                                   => GetChatResponse::class,
        'GET /v2/businesses/{businessId}/chats/message'                                                          => GetChatMessageResponse::class,
        'GET /v2/businesses/{businessId}/warehouses'                                                             => GetWarehousesResponse::class,
        'GET /v2/campaigns'                                                                                      => GetCampaignsResponse::class,
        'GET /v2/campaigns/{campaignId}'                                                                         => GetCampaignResponse::class,
        'GET /v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}'                                       => GetShipmentResponse::class,
        'GET /v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}/act'                                   => ApiClientDataErrorResponse::class,
        'GET /v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}/discrepancy-act'                       => Partner400::class,
        'GET /v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}/inbound-act'                           => Partner400::class,
        'GET /v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}/orders/info'                           => GetShipmentOrdersInfoResponse::class,
        'GET /v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}/pallet/labels'                         => Partner400::class,
        'GET /v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}/transportation-waybill'                => Partner400::class,
        'GET /v2/campaigns/{campaignId}/hidden-offers'                                                           => GetHiddenOffersResponse::class,
        'GET /v2/campaigns/{campaignId}/offer-prices'                                                            => GetPricesResponse::class,
        'GET /v2/campaigns/{campaignId}/orders'                                                                  => GetOrdersResponse::class,
        'GET /v2/campaigns/{campaignId}/orders/{orderId}'                                                        => GetOrderResponse::class,
        'GET /v2/campaigns/{campaignId}/orders/{orderId}/buyer'                                                  => GetOrderBuyerInfoResponse::class,
        'GET /v2/campaigns/{campaignId}/orders/{orderId}/delivery/labels'                                        => Partner400::class,
        'GET /v2/campaigns/{campaignId}/orders/{orderId}/delivery/labels/data'                                   => GetOrderLabelsDataResponse::class,
        'GET /v2/campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label'    => Partner400::class,
        'GET /v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId}'                                     => GetReturnResponse::class,
        'GET /v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application'                         => Partner400::class,
        'GET /v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash}' => Partner400::class,
        'GET /v2/campaigns/{campaignId}/outlets'                                                                 => GetOutletsResponse::class,
        'GET /v2/campaigns/{campaignId}/outlets/licenses'                                                        => GetOutletLicensesResponse::class,
        'GET /v2/campaigns/{campaignId}/outlets/{outletId}'                                                      => GetOutletResponse::class,
        'GET /v2/campaigns/{campaignId}/returns'                                                                 => GetReturnsResponse::class,
        'GET /v2/campaigns/{campaignId}/settings'                                                                => GetCampaignSettingsResponse::class,
        'GET /v2/campaigns/{campaignId}/shipments/reception-transfer-act'                                        => ApiClientDataErrorResponse::class,
        'GET /v2/delivery/services'                                                                              => GetDeliveryServicesResponse::class,
        'GET /v2/regions'                                                                                        => GetRegionsResponse::class,
        'GET /v2/regions/{regionId}'                                                                             => GetRegionByIdResponse::class,
        'GET /v2/regions/{regionId}/children'                                                                    => GetRegionWithChildrenResponse::class,
        'GET /v2/reports/info/{reportId}'                                                                        => GetReportInfoResponse::class,
        'GET /v2/warehouses'                                                                                     => GetFulfillmentWarehousesResponse::class,
        'POST /v1/businesses/{businessId}/goods-feedback-advertiser'                                             => GetGoodsFeedbackUrbanadsResponse::class,
        'POST /v1/businesses/{businessId}/goods-questions'                                                       => GetQuestionsResponse::class,
        'POST /v1/businesses/{businessId}/goods-questions/answers'                                               => GetAnswersResponse::class,
        'POST /v1/businesses/{businessId}/goods-questions/update'                                                => UpdateGoodsQuestionTextEntityResponse::class,
        'POST /v1/businesses/{businessId}/logistics-points'                                                      => GetLogisticPointsResponse::class,
        'POST /v1/businesses/{businessId}/offer-mappings/barcodes/generate'                                      => GenerateOfferBarcodesResponse::class,
        'POST /v1/businesses/{businessId}/operations'                                                            => GetOperationsResponse::class,
        'POST /v1/businesses/{businessId}/orders'                                                                => GetBusinessOrdersResponse::class,
        'POST /v1/businesses/{businessId}/reports/marketing-detalization/generate'                               => GenerateReportResponse::class,
        'POST /v1/businesses/{businessId}/returns/decisions'                                                     => GetReturnAvailableDecisionsResponse::class,
        'POST /v1/campaigns/{campaignId}/delivery-options'                                                       => GetDeliveryOptionsResponse::class,
        'POST /v1/campaigns/{campaignId}/orders/create'                                                          => CreateOrderResponse::class,
        'POST /v1/campaigns/{campaignId}/orders/update'                                                          => UpdateOrderResponse::class,
        'POST /v1/campaigns/{campaignId}/orders/update-options'                                                  => GetOrderUpdateOptionsResponse::class,
        'POST /v1/campaigns/{campaignId}/return-delivery-options'                                                => GetReturnDeliveryOptionsResponse::class,
        'POST /v1/campaigns/{campaignId}/returns/cancel'                                                         => CancelReturnResponse::class,
        'POST /v1/campaigns/{campaignId}/returns/create'                                                         => CreateReturnResponse::class,
        'POST /v1/reports/documents/barcodes/generate'                                                           => GenerateReportResponse::class,
        'POST /v2/auth/token'                                                                                    => GetTokenInfoResponse::class,
        'POST /v2/businesses/{businessId}/bids/info'                                                             => GetBidsInfoResponse::class,
        'POST /v2/businesses/{businessId}/bids/recommendations'                                                  => GetBidsRecommendationsResponse::class,
        'POST /v2/businesses/{businessId}/chats'                                                                 => GetChatsResponse::class,
        'POST /v2/businesses/{businessId}/chats/file/send'                                                       => EmptyApiResponse::class,
        'POST /v2/businesses/{businessId}/chats/history'                                                         => GetChatHistoryResponse::class,
        'POST /v2/businesses/{businessId}/chats/message'                                                         => EmptyApiResponse::class,
        'POST /v2/businesses/{businessId}/chats/new'                                                             => CreateChatResponse::class,
        'POST /v2/businesses/{businessId}/goods-feedback'                                                        => GetGoodsFeedbackResponse::class,
        'POST /v2/businesses/{businessId}/goods-feedback/comments'                                               => GetGoodsFeedbackCommentsResponse::class,
        'POST /v2/businesses/{businessId}/goods-feedback/comments/delete'                                        => EmptyApiResponse::class,
        'POST /v2/businesses/{businessId}/goods-feedback/comments/update'                                        => UpdateGoodsFeedbackCommentResponse::class,
        'POST /v2/businesses/{businessId}/goods-feedback/skip-reaction'                                          => EmptyApiResponse::class,
        'POST /v2/businesses/{businessId}/offer-cards'                                                           => GetOfferCardsContentStatusResponse::class,
        'POST /v2/businesses/{businessId}/offer-cards/update'                                                    => UpdateOfferContentResponse::class,
        'POST /v2/businesses/{businessId}/offer-mappings'                                                        => GetOfferMappingsResponse::class,
        'POST /v2/businesses/{businessId}/offer-mappings/archive'                                                => AddOffersToArchiveResponse::class,
        'POST /v2/businesses/{businessId}/offer-mappings/delete'                                                 => DeleteOffersResponse::class,
        'POST /v2/businesses/{businessId}/offer-mappings/unarchive'                                              => DeleteOffersFromArchiveResponse::class,
        'POST /v2/businesses/{businessId}/offer-mappings/update'                                                 => UpdateOfferMappingsResponse::class,
        'POST /v2/businesses/{businessId}/offer-prices'                                                          => GetDefaultPricesResponse::class,
        'POST /v2/businesses/{businessId}/offer-prices/updates'                                                  => EmptyApiResponse::class,
        'POST /v2/businesses/{businessId}/offers/recommendations'                                                => GetOfferRecommendationsResponse::class,
        'POST /v2/businesses/{businessId}/price-quarantine'                                                      => GetQuarantineOffersResponse::class,
        'POST /v2/businesses/{businessId}/price-quarantine/confirm'                                              => EmptyApiResponse::class,
        'POST /v2/businesses/{businessId}/promos'                                                                => GetPromosResponse::class,
        'POST /v2/businesses/{businessId}/promos/offers'                                                         => GetPromoOffersResponse::class,
        'POST /v2/businesses/{businessId}/promos/offers/delete'                                                  => DeletePromoOffersResponse::class,
        'POST /v2/businesses/{businessId}/promos/offers/update'                                                  => UpdatePromoOffersResponse::class,
        'POST /v2/businesses/{businessId}/ratings/quality'                                                       => GetQualityRatingResponse::class,
        'POST /v2/businesses/{businessId}/settings'                                                              => GetBusinessSettingsResponse::class,
        'POST /v2/businesses/{businessId}/warehouses'                                                            => GetPagedWarehousesResponse::class,
        'POST /v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}/confirm'                              => EmptyApiResponse::class,
        'POST /v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}/orders/transfer'                      => EmptyApiResponse::class,
        'POST /v2/campaigns/{campaignId}/hidden-offers'                                                          => EmptyApiResponse::class,
        'POST /v2/campaigns/{campaignId}/hidden-offers/delete'                                                   => EmptyApiResponse::class,
        'POST /v2/campaigns/{campaignId}/offer-prices'                                                           => GetPricesByOfferIdsResponse::class,
        'POST /v2/campaigns/{campaignId}/offer-prices/updates'                                                   => EmptyApiResponse::class,
        'POST /v2/campaigns/{campaignId}/offers'                                                                 => GetCampaignOffersResponse::class,
        'POST /v2/campaigns/{campaignId}/offers/delete'                                                          => DeleteCampaignOffersResponse::class,
        'POST /v2/campaigns/{campaignId}/offers/stocks'                                                          => GetWarehouseStocksResponse::class,
        'POST /v2/campaigns/{campaignId}/offers/update'                                                          => EmptyApiResponse::class,
        'POST /v2/campaigns/{campaignId}/orders/status-update'                                                   => UpdateOrderStatusesResponse::class,
        'POST /v2/campaigns/{campaignId}/orders/{orderId}/business-buyer'                                        => GetBusinessBuyerInfoResponse::class,
        'POST /v2/campaigns/{campaignId}/orders/{orderId}/deliverDigitalGoods'                                   => EmptyApiResponse::class,
        'POST /v2/campaigns/{campaignId}/orders/{orderId}/delivery/track'                                        => EmptyApiResponse::class,
        'POST /v2/campaigns/{campaignId}/orders/{orderId}/documents'                                             => GetBusinessDocumentsInfoResponse::class,
        'POST /v2/campaigns/{campaignId}/orders/{orderId}/external-id'                                           => EmptyApiResponse::class,
        'POST /v2/campaigns/{campaignId}/orders/{orderId}/identifiers/status'                                    => GetOrderIdentifiersStatusResponse::class,
        'POST /v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision'                           => EmptyApiResponse::class,
        'POST /v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/submit'                    => EmptyApiResponse::class,
        'POST /v2/campaigns/{campaignId}/outlets'                                                                => CreateOutletResponse::class,
        'POST /v2/campaigns/{campaignId}/outlets/licenses'                                                       => EmptyApiResponse::class,
        'POST /v2/campaigns/{campaignId}/price-quarantine'                                                       => GetQuarantineOffersResponse::class,
        'POST /v2/campaigns/{campaignId}/price-quarantine/confirm'                                               => EmptyApiResponse::class,
        'POST /v2/campaigns/{campaignId}/ratings/quality/details'                                                => GetQualityRatingDetailsResponse::class,
        'POST /v2/campaigns/{campaignId}/stats/orders'                                                           => GetOrdersStatsResponse::class,
        'POST /v2/campaigns/{campaignId}/stats/skus'                                                             => GetGoodsStatsResponse::class,
        'POST /v2/campaigns/{campaignId}/supply-requests'                                                        => GetSupplyRequestsResponse::class,
        'POST /v2/campaigns/{campaignId}/supply-requests/documents'                                              => GetSupplyRequestDocumentsResponse::class,
        'POST /v2/campaigns/{campaignId}/supply-requests/items'                                                  => GetSupplyRequestItemsResponse::class,
        'POST /v2/campaigns/{campaignId}/warehouse/status'                                                       => UpdateWarehouseStatusResponse::class,
        'POST /v2/categories/max-sale-quantum'                                                                   => GetCategoriesMaxSaleQuantumResponse::class,
        'POST /v2/categories/tree'                                                                               => GetCategoriesResponse::class,
        'POST /v2/category/{categoryId}/parameters'                                                              => GetCategoryContentParametersResponse::class,
        'POST /v2/regions/countries'                                                                             => GetRegionsCodesResponse::class,
        'POST /v2/reports/banners-statistics/generate'                                                           => GenerateReportResponse::class,
        'POST /v2/reports/boost-consolidated/generate'                                                           => GenerateReportResponse::class,
        'POST /v2/reports/closure-documents/detalization/generate'                                               => GenerateReportResponse::class,
        'POST /v2/reports/closure-documents/generate'                                                            => GenerateReportResponse::class,
        'POST /v2/reports/competitors-position/generate'                                                         => GenerateReportResponse::class,
        'POST /v2/reports/documents/labels/generate'                                                             => GenerateReportResponse::class,
        'POST /v2/reports/documents/shipment-list/generate'                                                      => GenerateReportResponse::class,
        'POST /v2/reports/goods-feedback/generate'                                                               => GenerateReportResponse::class,
        'POST /v2/reports/goods-movement/generate'                                                               => GenerateReportResponse::class,
        'POST /v2/reports/goods-prices/generate'                                                                 => GenerateReportResponse::class,
        'POST /v2/reports/goods-realization/generate'                                                            => GenerateReportResponse::class,
        'POST /v2/reports/goods-turnover/generate'                                                               => GenerateReportResponse::class,
        'POST /v2/reports/jewelry-fiscal/generate'                                                               => GenerateReportResponse::class,
        'POST /v2/reports/key-indicators/generate'                                                               => GenerateReportResponse::class,
        'POST /v2/reports/sales-geography/generate'                                                              => GenerateReportResponse::class,
        'POST /v2/reports/shelf-statistics/generate'                                                             => GenerateReportResponse::class,
        'POST /v2/reports/shows-boost/generate'                                                                  => GenerateReportResponse::class,
        'POST /v2/reports/shows-sales/generate'                                                                  => GenerateReportResponse::class,
        'POST /v2/reports/stocks-on-warehouses/generate'                                                         => GenerateReportResponse::class,
        'POST /v2/reports/united-marketplace-services/generate'                                                  => GenerateReportResponse::class,
        'POST /v2/reports/united-netting/generate'                                                               => GenerateReportResponse::class,
        'POST /v2/reports/united-orders/generate'                                                                => GenerateReportResponse::class,
        'POST /v2/reports/united-returns/generate'                                                               => GenerateReportResponse::class,
        'POST /v2/tariffs/calculate'                                                                             => CalculateTariffsResponse::class,
        'PUT /v2/businesses/{businessId}/bids'                                                                   => EmptyApiResponse::class,
        'PUT /v2/campaigns/{campaignId}/bids'                                                                    => EmptyApiResponse::class,
        'PUT /v2/campaigns/{campaignId}/first-mile/shipments'                                                    => SearchShipmentsResponse::class,
        'PUT /v2/campaigns/{campaignId}/first-mile/shipments/{shipmentId}/pallets'                               => EmptyApiResponse::class,
        'PUT /v2/campaigns/{campaignId}/offers/stocks'                                                           => Partner200::class,
        'PUT /v2/campaigns/{campaignId}/orders/{orderId}/boxes'                                                  => SetOrderBoxLayoutResponse::class,
        'PUT /v2/campaigns/{campaignId}/orders/{orderId}/cancellation/accept'                                    => EmptyApiResponse::class,
        'PUT /v2/campaigns/{campaignId}/orders/{orderId}/delivery/date'                                          => EmptyApiResponse::class,
        'PUT /v2/campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes'                  => SetOrderShipmentBoxesResponse::class,
        'PUT /v2/campaigns/{campaignId}/orders/{orderId}/delivery/storage-limit'                                 => EmptyApiResponse::class,
        'PUT /v2/campaigns/{campaignId}/orders/{orderId}/identifiers'                                            => ProvideOrderItemIdentifiersResponse::class,
        'PUT /v2/campaigns/{campaignId}/orders/{orderId}/items'                                                  => Partner400::class,
        'PUT /v2/campaigns/{campaignId}/orders/{orderId}/status'                                                 => UpdateOrderStatusResponse::class,
        'PUT /v2/campaigns/{campaignId}/orders/{orderId}/verifyEac'                                              => VerifyOrderEacResponse::class,
        'PUT /v2/campaigns/{campaignId}/outlets/{outletId}'                                                      => EmptyApiResponse::class,
    ];

    /**
     * @var array<string, class-string<YandexMarketDtoInterface>>
     */
    private const PATTERN_MAP = [
        '~^DELETE /v2/campaigns/[^/]+/outlets/licenses$~'                                     => EmptyApiResponse::class,
        '~^DELETE /v2/campaigns/[^/]+/outlets/[^/]+$~'                                        => EmptyApiResponse::class,
        '~^GET /v2/businesses/[^/]+/chat$~'                                                   => GetChatResponse::class,
        '~^GET /v2/businesses/[^/]+/chats/message$~'                                          => GetChatMessageResponse::class,
        '~^GET /v2/businesses/[^/]+/warehouses$~'                                             => GetWarehousesResponse::class,
        '~^GET /v2/campaigns/[^/]+$~'                                                         => GetCampaignResponse::class,
        '~^GET /v2/campaigns/[^/]+/first\\-mile/shipments/[^/]+$~'                            => GetShipmentResponse::class,
        '~^GET /v2/campaigns/[^/]+/first\\-mile/shipments/[^/]+/act$~'                        => ApiClientDataErrorResponse::class,
        '~^GET /v2/campaigns/[^/]+/first\\-mile/shipments/[^/]+/discrepancy\\-act$~'          => Partner400::class,
        '~^GET /v2/campaigns/[^/]+/first\\-mile/shipments/[^/]+/inbound\\-act$~'              => Partner400::class,
        '~^GET /v2/campaigns/[^/]+/first\\-mile/shipments/[^/]+/orders/info$~'                => GetShipmentOrdersInfoResponse::class,
        '~^GET /v2/campaigns/[^/]+/first\\-mile/shipments/[^/]+/pallet/labels$~'              => Partner400::class,
        '~^GET /v2/campaigns/[^/]+/first\\-mile/shipments/[^/]+/transportation\\-waybill$~'   => Partner400::class,
        '~^GET /v2/campaigns/[^/]+/hidden\\-offers$~'                                         => GetHiddenOffersResponse::class,
        '~^GET /v2/campaigns/[^/]+/offer\\-prices$~'                                          => GetPricesResponse::class,
        '~^GET /v2/campaigns/[^/]+/orders$~'                                                  => GetOrdersResponse::class,
        '~^GET /v2/campaigns/[^/]+/orders/[^/]+$~'                                            => GetOrderResponse::class,
        '~^GET /v2/campaigns/[^/]+/orders/[^/]+/buyer$~'                                      => GetOrderBuyerInfoResponse::class,
        '~^GET /v2/campaigns/[^/]+/orders/[^/]+/delivery/labels$~'                            => Partner400::class,
        '~^GET /v2/campaigns/[^/]+/orders/[^/]+/delivery/labels/data$~'                       => GetOrderLabelsDataResponse::class,
        '~^GET /v2/campaigns/[^/]+/orders/[^/]+/delivery/shipments/[^/]+/boxes/[^/]+/label$~' => Partner400::class,
        '~^GET /v2/campaigns/[^/]+/orders/[^/]+/returns/[^/]+$~'                              => GetReturnResponse::class,
        '~^GET /v2/campaigns/[^/]+/orders/[^/]+/returns/[^/]+/application$~'                  => Partner400::class,
        '~^GET /v2/campaigns/[^/]+/orders/[^/]+/returns/[^/]+/decision/[^/]+/image/[^/]+$~'   => Partner400::class,
        '~^GET /v2/campaigns/[^/]+/outlets$~'                                                 => GetOutletsResponse::class,
        '~^GET /v2/campaigns/[^/]+/outlets/licenses$~'                                        => GetOutletLicensesResponse::class,
        '~^GET /v2/campaigns/[^/]+/outlets/[^/]+$~'                                           => GetOutletResponse::class,
        '~^GET /v2/campaigns/[^/]+/returns$~'                                                 => GetReturnsResponse::class,
        '~^GET /v2/campaigns/[^/]+/settings$~'                                                => GetCampaignSettingsResponse::class,
        '~^GET /v2/campaigns/[^/]+/shipments/reception\\-transfer\\-act$~'                    => ApiClientDataErrorResponse::class,
        '~^GET /v2/regions/[^/]+$~'                                                           => GetRegionByIdResponse::class,
        '~^GET /v2/regions/[^/]+/children$~'                                                  => GetRegionWithChildrenResponse::class,
        '~^GET /v2/reports/info/[^/]+$~'                                                      => GetReportInfoResponse::class,
        '~^POST /v1/businesses/[^/]+/goods\\-feedback\\-advertiser$~'                         => GetGoodsFeedbackUrbanadsResponse::class,
        '~^POST /v1/businesses/[^/]+/goods\\-questions$~'                                     => GetQuestionsResponse::class,
        '~^POST /v1/businesses/[^/]+/goods\\-questions/answers$~'                             => GetAnswersResponse::class,
        '~^POST /v1/businesses/[^/]+/goods\\-questions/update$~'                              => UpdateGoodsQuestionTextEntityResponse::class,
        '~^POST /v1/businesses/[^/]+/logistics\\-points$~'                                    => GetLogisticPointsResponse::class,
        '~^POST /v1/businesses/[^/]+/offer\\-mappings/barcodes/generate$~'                    => GenerateOfferBarcodesResponse::class,
        '~^POST /v1/businesses/[^/]+/operations$~'                                            => GetOperationsResponse::class,
        '~^POST /v1/businesses/[^/]+/orders$~'                                                => GetBusinessOrdersResponse::class,
        '~^POST /v1/businesses/[^/]+/reports/marketing\\-detalization/generate$~'             => GenerateReportResponse::class,
        '~^POST /v1/businesses/[^/]+/returns/decisions$~'                                     => GetReturnAvailableDecisionsResponse::class,
        '~^POST /v1/campaigns/[^/]+/delivery\\-options$~'                                     => GetDeliveryOptionsResponse::class,
        '~^POST /v1/campaigns/[^/]+/orders/create$~'                                          => CreateOrderResponse::class,
        '~^POST /v1/campaigns/[^/]+/orders/update$~'                                          => UpdateOrderResponse::class,
        '~^POST /v1/campaigns/[^/]+/orders/update\\-options$~'                                => GetOrderUpdateOptionsResponse::class,
        '~^POST /v1/campaigns/[^/]+/return\\-delivery\\-options$~'                            => GetReturnDeliveryOptionsResponse::class,
        '~^POST /v1/campaigns/[^/]+/returns/cancel$~'                                         => CancelReturnResponse::class,
        '~^POST /v1/campaigns/[^/]+/returns/create$~'                                         => CreateReturnResponse::class,
        '~^POST /v2/businesses/[^/]+/bids/info$~'                                             => GetBidsInfoResponse::class,
        '~^POST /v2/businesses/[^/]+/bids/recommendations$~'                                  => GetBidsRecommendationsResponse::class,
        '~^POST /v2/businesses/[^/]+/chats$~'                                                 => GetChatsResponse::class,
        '~^POST /v2/businesses/[^/]+/chats/file/send$~'                                       => EmptyApiResponse::class,
        '~^POST /v2/businesses/[^/]+/chats/history$~'                                         => GetChatHistoryResponse::class,
        '~^POST /v2/businesses/[^/]+/chats/message$~'                                         => EmptyApiResponse::class,
        '~^POST /v2/businesses/[^/]+/chats/new$~'                                             => CreateChatResponse::class,
        '~^POST /v2/businesses/[^/]+/goods\\-feedback$~'                                      => GetGoodsFeedbackResponse::class,
        '~^POST /v2/businesses/[^/]+/goods\\-feedback/comments$~'                             => GetGoodsFeedbackCommentsResponse::class,
        '~^POST /v2/businesses/[^/]+/goods\\-feedback/comments/delete$~'                      => EmptyApiResponse::class,
        '~^POST /v2/businesses/[^/]+/goods\\-feedback/comments/update$~'                      => UpdateGoodsFeedbackCommentResponse::class,
        '~^POST /v2/businesses/[^/]+/goods\\-feedback/skip\\-reaction$~'                      => EmptyApiResponse::class,
        '~^POST /v2/businesses/[^/]+/offer\\-cards$~'                                         => GetOfferCardsContentStatusResponse::class,
        '~^POST /v2/businesses/[^/]+/offer\\-cards/update$~'                                  => UpdateOfferContentResponse::class,
        '~^POST /v2/businesses/[^/]+/offer\\-mappings$~'                                      => GetOfferMappingsResponse::class,
        '~^POST /v2/businesses/[^/]+/offer\\-mappings/archive$~'                              => AddOffersToArchiveResponse::class,
        '~^POST /v2/businesses/[^/]+/offer\\-mappings/delete$~'                               => DeleteOffersResponse::class,
        '~^POST /v2/businesses/[^/]+/offer\\-mappings/unarchive$~'                            => DeleteOffersFromArchiveResponse::class,
        '~^POST /v2/businesses/[^/]+/offer\\-mappings/update$~'                               => UpdateOfferMappingsResponse::class,
        '~^POST /v2/businesses/[^/]+/offer\\-prices$~'                                        => GetDefaultPricesResponse::class,
        '~^POST /v2/businesses/[^/]+/offer\\-prices/updates$~'                                => EmptyApiResponse::class,
        '~^POST /v2/businesses/[^/]+/offers/recommendations$~'                                => GetOfferRecommendationsResponse::class,
        '~^POST /v2/businesses/[^/]+/price\\-quarantine$~'                                    => GetQuarantineOffersResponse::class,
        '~^POST /v2/businesses/[^/]+/price\\-quarantine/confirm$~'                            => EmptyApiResponse::class,
        '~^POST /v2/businesses/[^/]+/promos$~'                                                => GetPromosResponse::class,
        '~^POST /v2/businesses/[^/]+/promos/offers$~'                                         => GetPromoOffersResponse::class,
        '~^POST /v2/businesses/[^/]+/promos/offers/delete$~'                                  => DeletePromoOffersResponse::class,
        '~^POST /v2/businesses/[^/]+/promos/offers/update$~'                                  => UpdatePromoOffersResponse::class,
        '~^POST /v2/businesses/[^/]+/ratings/quality$~'                                       => GetQualityRatingResponse::class,
        '~^POST /v2/businesses/[^/]+/settings$~'                                              => GetBusinessSettingsResponse::class,
        '~^POST /v2/businesses/[^/]+/warehouses$~'                                            => GetPagedWarehousesResponse::class,
        '~^POST /v2/campaigns/[^/]+/first\\-mile/shipments/[^/]+/confirm$~'                   => EmptyApiResponse::class,
        '~^POST /v2/campaigns/[^/]+/first\\-mile/shipments/[^/]+/orders/transfer$~'           => EmptyApiResponse::class,
        '~^POST /v2/campaigns/[^/]+/hidden\\-offers$~'                                        => EmptyApiResponse::class,
        '~^POST /v2/campaigns/[^/]+/hidden\\-offers/delete$~'                                 => EmptyApiResponse::class,
        '~^POST /v2/campaigns/[^/]+/offer\\-prices$~'                                         => GetPricesByOfferIdsResponse::class,
        '~^POST /v2/campaigns/[^/]+/offer\\-prices/updates$~'                                 => EmptyApiResponse::class,
        '~^POST /v2/campaigns/[^/]+/offers$~'                                                 => GetCampaignOffersResponse::class,
        '~^POST /v2/campaigns/[^/]+/offers/delete$~'                                          => DeleteCampaignOffersResponse::class,
        '~^POST /v2/campaigns/[^/]+/offers/stocks$~'                                          => GetWarehouseStocksResponse::class,
        '~^POST /v2/campaigns/[^/]+/offers/update$~'                                          => EmptyApiResponse::class,
        '~^POST /v2/campaigns/[^/]+/orders/status\\-update$~'                                 => UpdateOrderStatusesResponse::class,
        '~^POST /v2/campaigns/[^/]+/orders/[^/]+/business\\-buyer$~'                          => GetBusinessBuyerInfoResponse::class,
        '~^POST /v2/campaigns/[^/]+/orders/[^/]+/deliverDigitalGoods$~'                       => EmptyApiResponse::class,
        '~^POST /v2/campaigns/[^/]+/orders/[^/]+/delivery/track$~'                            => EmptyApiResponse::class,
        '~^POST /v2/campaigns/[^/]+/orders/[^/]+/documents$~'                                 => GetBusinessDocumentsInfoResponse::class,
        '~^POST /v2/campaigns/[^/]+/orders/[^/]+/external\\-id$~'                             => EmptyApiResponse::class,
        '~^POST /v2/campaigns/[^/]+/orders/[^/]+/identifiers/status$~'                        => GetOrderIdentifiersStatusResponse::class,
        '~^POST /v2/campaigns/[^/]+/orders/[^/]+/returns/[^/]+/decision$~'                    => EmptyApiResponse::class,
        '~^POST /v2/campaigns/[^/]+/orders/[^/]+/returns/[^/]+/decision/submit$~'             => EmptyApiResponse::class,
        '~^POST /v2/campaigns/[^/]+/outlets$~'                                                => CreateOutletResponse::class,
        '~^POST /v2/campaigns/[^/]+/outlets/licenses$~'                                       => EmptyApiResponse::class,
        '~^POST /v2/campaigns/[^/]+/price\\-quarantine$~'                                     => GetQuarantineOffersResponse::class,
        '~^POST /v2/campaigns/[^/]+/price\\-quarantine/confirm$~'                             => EmptyApiResponse::class,
        '~^POST /v2/campaigns/[^/]+/ratings/quality/details$~'                                => GetQualityRatingDetailsResponse::class,
        '~^POST /v2/campaigns/[^/]+/stats/orders$~'                                           => GetOrdersStatsResponse::class,
        '~^POST /v2/campaigns/[^/]+/stats/skus$~'                                             => GetGoodsStatsResponse::class,
        '~^POST /v2/campaigns/[^/]+/supply\\-requests$~'                                      => GetSupplyRequestsResponse::class,
        '~^POST /v2/campaigns/[^/]+/supply\\-requests/documents$~'                            => GetSupplyRequestDocumentsResponse::class,
        '~^POST /v2/campaigns/[^/]+/supply\\-requests/items$~'                                => GetSupplyRequestItemsResponse::class,
        '~^POST /v2/campaigns/[^/]+/warehouse/status$~'                                       => UpdateWarehouseStatusResponse::class,
        '~^POST /v2/category/[^/]+/parameters$~'                                              => GetCategoryContentParametersResponse::class,
        '~^PUT /v2/businesses/[^/]+/bids$~'                                                   => EmptyApiResponse::class,
        '~^PUT /v2/campaigns/[^/]+/bids$~'                                                    => EmptyApiResponse::class,
        '~^PUT /v2/campaigns/[^/]+/first\\-mile/shipments$~'                                  => SearchShipmentsResponse::class,
        '~^PUT /v2/campaigns/[^/]+/first\\-mile/shipments/[^/]+/pallets$~'                    => EmptyApiResponse::class,
        '~^PUT /v2/campaigns/[^/]+/offers/stocks$~'                                           => Partner200::class,
        '~^PUT /v2/campaigns/[^/]+/orders/[^/]+/boxes$~'                                      => SetOrderBoxLayoutResponse::class,
        '~^PUT /v2/campaigns/[^/]+/orders/[^/]+/cancellation/accept$~'                        => EmptyApiResponse::class,
        '~^PUT /v2/campaigns/[^/]+/orders/[^/]+/delivery/date$~'                              => EmptyApiResponse::class,
        '~^PUT /v2/campaigns/[^/]+/orders/[^/]+/delivery/shipments/[^/]+/boxes$~'             => SetOrderShipmentBoxesResponse::class,
        '~^PUT /v2/campaigns/[^/]+/orders/[^/]+/delivery/storage\\-limit$~'                   => EmptyApiResponse::class,
        '~^PUT /v2/campaigns/[^/]+/orders/[^/]+/identifiers$~'                                => ProvideOrderItemIdentifiersResponse::class,
        '~^PUT /v2/campaigns/[^/]+/orders/[^/]+/items$~'                                      => Partner400::class,
        '~^PUT /v2/campaigns/[^/]+/orders/[^/]+/status$~'                                     => UpdateOrderStatusResponse::class,
        '~^PUT /v2/campaigns/[^/]+/orders/[^/]+/verifyEac$~'                                  => VerifyOrderEacResponse::class,
        '~^PUT /v2/campaigns/[^/]+/outlets/[^/]+$~'                                           => EmptyApiResponse::class,
    ];

    /**
     * @return class-string<YandexMarketDtoInterface>|null
     */
    public static function resolve(string $method, string $path): ?string
    {
        $key = strtoupper($method) . ' ' . normalizeYandexMarketPath($path);

        if (isset(self::MAP[$key])) {
            return self::MAP[$key];
        }

        foreach (self::PATTERN_MAP as $pattern => $class) {
            if (preg_match($pattern, $key) === 1) {
                return $class;
            }
        }

        return null;
    }
}

function normalizeYandexMarketPath(string $path): string
{
    return '/' . trim($path, '/');
}

function normalizeYandexMarketPathPattern(string $path): string
{
    $pattern = preg_quote($path, '~');

    return '~^' . preg_replace('~\\\\\{[^/]+\\\\\}~', '[^/]+', $pattern) . '$~';
}
