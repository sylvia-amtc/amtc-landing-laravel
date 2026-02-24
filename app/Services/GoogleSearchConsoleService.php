<?php

namespace App\Services;

use Google\Service\SearchConsole;
use Google\Service\SearchConsole\SearchAnalyticsQueryRequest;
use Google_Client;

class GoogleSearchConsoleService
{
    protected SearchConsole $service;

    protected string $siteUrl;

    public function __construct()
    {
        $client = new Google_Client;
        $client->setAuthConfig(config('services.google.search_console.credentials_path'));
        $client->addScope(SearchConsole::WEBMASTERS_READONLY);

        $this->service = new SearchConsole($client);
        $this->siteUrl = config('services.google.search_console.site_url');
    }

    public function getSearchAnalytics(?string $startDate = null, ?string $endDate = null, int $rowLimit = 100): array
    {
        $startDate = $startDate ?? date('Y-m-d', strtotime('-30 days'));
        $endDate = $endDate ?? date('Y-m-d');

        $request = new SearchAnalyticsQueryRequest;
        $request->setStartDate($startDate);
        $request->setEndDate($endDate);
        $request->setDimensions(['page', 'query']);
        $request->setRowLimit($rowLimit);

        $response = $this->service->searchanalytics->query($this->siteUrl, $request);

        $data = [];
        foreach ($response->getRows() as $row) {
            $data[] = [
                'page' => $row->getKeys()[0],
                'query' => $row->getKeys()[1],
                'clicks' => $row->getClicks(),
                'impressions' => $row->getImpressions(),
                'ctr' => $row->getCtr(),
                'position' => $row->getPosition(),
            ];
        }

        return $data;
    }

    public function getPagePerformance(string $page, ?string $startDate = null, ?string $endDate = null): array
    {
        $startDate = $startDate ?? date('Y-m-d', strtotime('-30 days'));
        $endDate = $endDate ?? date('Y-m-d');

        $request = new SearchAnalyticsQueryRequest;
        $request->setStartDate($startDate);
        $request->setEndDate($endDate);
        $request->setDimensions(['query']);
        $request->setDimensionFilterGroups([[
            'filters' => [[
                'dimension' => 'page',
                'expression' => $page,
            ]],
        ]]);

        $response = $this->service->searchanalytics->query($this->siteUrl, $request);

        $data = [];
        foreach ($response->getRows() as $row) {
            $data[] = [
                'query' => $row->getKeys()[0],
                'clicks' => $row->getClicks(),
                'impressions' => $row->getImpressions(),
                'ctr' => $row->getCtr(),
                'position' => $row->getPosition(),
            ];
        }

        return $data;
    }
}
