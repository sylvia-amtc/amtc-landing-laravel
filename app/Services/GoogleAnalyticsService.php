<?php

namespace App\Services;

use Google\Analytics\Data\V1beta\BetaAnalyticsDataClient;
use Google\Analytics\Data\V1beta\DateRange;
use Google\Analytics\Data\V1beta\Dimension;
use Google\Analytics\Data\V1beta\Metric;
use Google\Analytics\Data\V1beta\RunReportRequest;

class GoogleAnalyticsService
{
    protected BetaAnalyticsDataClient $client;

    protected string $propertyId;

    public function __construct()
    {
        $this->client = new BetaAnalyticsDataClient([
            'credentials' => config('services.google.analytics.credentials_path'),
        ]);
        $this->propertyId = 'properties/'.config('services.google.analytics.property_id');
    }

    public function getPagePerformance(array $pages, string $startDate = '30daysAgo', string $endDate = 'today'): array
    {
        $request = (new RunReportRequest)
            ->setProperty($this->propertyId)
            ->setDateRanges([
                new DateRange([
                    'start_date' => $startDate,
                    'end_date' => $endDate,
                ]),
            ])
            ->setDimensions([new Dimension(['name' => 'pagePath'])])
            ->setMetrics([
                new Metric(['name' => 'sessions']),
                new Metric(['name' => 'totalUsers']),
                new Metric(['name' => 'bounceRate']),
                new Metric(['name' => 'averageSessionDuration']),
            ]);

        $response = $this->client->runReport($request);

        // Transform response to array
        $data = [];
        foreach ($response->getRows() as $row) {
            $data[] = [
                'page' => $row->getDimensionValues()[0]->getValue(),
                'sessions' => $row->getMetricValues()[0]->getValue(),
                'users' => $row->getMetricValues()[1]->getValue(),
                'bounce_rate' => $row->getMetricValues()[2]->getValue(),
                'avg_duration' => $row->getMetricValues()[3]->getValue(),
            ];
        }

        return $data;
    }

    public function getOrganicTraffic(string $startDate = '30daysAgo', string $endDate = 'today'): array
    {
        $request = (new RunReportRequest)
            ->setProperty($this->propertyId)
            ->setDateRanges([
                new DateRange([
                    'start_date' => $startDate,
                    'end_date' => $endDate,
                ]),
            ])
            ->setDimensionFilter([
                'filter' => [
                    'field_name' => 'sessionDefaultChannelGrouping',
                    'string_filter' => ['value' => 'Organic Search'],
                ],
            ])
            ->setDimensions([
                new Dimension(['name' => 'date']),
                new Dimension(['name' => 'pagePath']),
            ])
            ->setMetrics([
                new Metric(['name' => 'sessions']),
                new Metric(['name' => 'newUsers']),
            ]);

        $response = $this->client->runReport($request);

        $data = [];
        foreach ($response->getRows() as $row) {
            $data[] = [
                'date' => $row->getDimensionValues()[0]->getValue(),
                'page' => $row->getDimensionValues()[1]->getValue(),
                'sessions' => $row->getMetricValues()[0]->getValue(),
                'new_users' => $row->getMetricValues()[1]->getValue(),
            ];
        }

        return $data;
    }
}
