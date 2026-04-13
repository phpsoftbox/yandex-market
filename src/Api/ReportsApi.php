<?php

declare(strict_types=1);

namespace PhpSoftBox\YandexMarket\Api;

use PhpSoftBox\YandexMarket\YandexMarketApiResponse;

final class ReportsApi extends YandexMarketApiSection
{
    public function generateBarcodesReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v1/reports/documents/barcodes/generate', $payload, $query);
    }

    public function generateBannersStatisticsReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/banners-statistics/generate', $payload, $query);
    }

    public function generateBoostConsolidatedReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/boost-consolidated/generate', $payload, $query);
    }

    public function generateClosureDocumentsDetalizationReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/closure-documents/detalization/generate', $payload, $query);
    }

    public function generateClosureDocumentsReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/closure-documents/generate', $payload, $query);
    }

    public function generateCompetitorsPositionReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/competitors-position/generate', $payload, $query);
    }

    public function generateMassOrderLabelsReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/documents/labels/generate', $payload, $query);
    }

    public function generateShipmentListDocumentReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/documents/shipment-list/generate', $payload, $query);
    }

    public function generateGoodsFeedbackReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/goods-feedback/generate', $payload, $query);
    }

    public function generateGoodsMovementReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/goods-movement/generate', $payload, $query);
    }

    public function generateGoodsPricesReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/goods-prices/generate', $payload, $query);
    }

    public function generateGoodsRealizationReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/goods-realization/generate', $payload, $query);
    }

    public function generateGoodsTurnoverReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/goods-turnover/generate', $payload, $query);
    }

    public function getReportInfo(string|int $reportId, array $query = []): YandexMarketApiResponse
    {
        $path = $this->resolvePath('/v2/reports/info/{reportId}', [
            'reportId' => $reportId,
        ]);

        return $this->client->get($path, $query);
    }

    public function generateJewelryFiscalReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/jewelry-fiscal/generate', $payload, $query);
    }

    public function generateKeyIndicatorsReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/key-indicators/generate', $payload, $query);
    }

    public function generateSalesGeographyReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/sales-geography/generate', $payload, $query);
    }

    public function generateShelfsStatisticsReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/shelf-statistics/generate', $payload, $query);
    }

    public function generateShowsBoostReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/shows-boost/generate', $payload, $query);
    }

    public function generateShowsSalesReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/shows-sales/generate', $payload, $query);
    }

    public function generateStocksOnWarehousesReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/stocks-on-warehouses/generate', $payload, $query);
    }

    public function generateUnitedMarketplaceServicesReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/united-marketplace-services/generate', $payload, $query);
    }

    public function generateUnitedNettingReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/united-netting/generate', $payload, $query);
    }

    public function generateUnitedOrdersReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/united-orders/generate', $payload, $query);
    }

    public function generateUnitedReturnsReport(array $payload = [], array $query = []): YandexMarketApiResponse
    {
        return $this->client->post('/v2/reports/united-returns/generate', $payload, $query);
    }
}
