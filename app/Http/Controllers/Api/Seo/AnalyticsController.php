<?php

namespace App\Http\Controllers\Api\Seo;

use App\Http\Controllers\Controller;
use App\Services\GoogleAnalyticsService;
use App\Services\GoogleSearchConsoleService;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function __construct(
        protected GoogleAnalyticsService $analytics,
        protected GoogleSearchConsoleService $searchConsole
    ) {}

    public function pages(Request $request)
    {
        $validated = $request->validate([
            'pages' => 'nullable|array',
            'pages.*' => 'string',
            'start_date' => 'nullable|string|date_format:Y-m-d',
            'end_date' => 'nullable|string|date_format:Y-m-d',
        ]);

        $pages = $validated['pages'] ?? ['/'];
        $startDate = $validated['start_date'] ?? '30daysAgo';
        $endDate = $validated['end_date'] ?? 'today';

        try {
            $data = $this->analytics->getPagePerformance($pages, $startDate, $endDate);

            return response()->json([
                'success' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch analytics data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function keywords(Request $request)
    {
        $validated = $request->validate([
            'page' => 'nullable|string',
            'start_date' => 'nullable|string|date_format:Y-m-d',
            'end_date' => 'nullable|string|date_format:Y-m-d',
        ]);

        $page = $validated['page'] ?? null;
        $startDate = $validated['start_date'] ?? null;
        $endDate = $validated['end_date'] ?? null;

        try {
            $data = $page
                ? $this->searchConsole->getPagePerformance($page, $startDate, $endDate)
                : $this->searchConsole->getSearchAnalytics($startDate, $endDate);

            return response()->json([
                'success' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch Search Console data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function traffic(Request $request)
    {
        $validated = $request->validate([
            'start_date' => 'nullable|string|date_format:Y-m-d',
            'end_date' => 'nullable|string|date_format:Y-m-d',
        ]);

        $startDate = $validated['start_date'] ?? '30daysAgo';
        $endDate = $validated['end_date'] ?? 'today';

        try {
            $data = $this->analytics->getOrganicTraffic($startDate, $endDate);

            return response()->json([
                'success' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch traffic data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
