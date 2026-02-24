<?php

namespace App\Http\Controllers;

class VisualizationController extends Controller
{
    public function srtData()
    {
        return response()->json([
            'origin' => [
                'lat' => 51.2194,
                'lon' => 4.4025,
                'name' => 'Antwerp HQ',
            ],
            'destinations' => [
                ['lat' => 40.7128, 'lon' => -74.0060, 'name' => 'New York', 'status' => 'active'],
                ['lat' => 51.5074, 'lon' => -0.1278, 'name' => 'London', 'status' => 'active'],
                ['lat' => 35.6762, 'lon' => 139.6503, 'name' => 'Tokyo', 'status' => 'active'],
                ['lat' => -33.8688, 'lon' => 151.2093, 'name' => 'Sydney', 'status' => 'active'],
                ['lat' => 1.3521, 'lon' => 103.8198, 'name' => 'Singapore', 'status' => 'active'],
                ['lat' => 25.2048, 'lon' => 55.2708, 'name' => 'Dubai', 'status' => 'active'],
            ],
        ]);
    }

    public function cdnData()
    {
        return response()->json([
            'origin' => [
                'lat' => 51.2194,
                'lon' => 4.4025,
                'name' => 'Origin Server',
            ],
            'edges' => [
                [
                    'lat' => 37.7749,
                    'lon' => -122.4194,
                    'name' => 'US West',
                    'users' => [
                        ['lat' => 37.3382, 'lon' => -121.8863],
                        ['lat' => 34.0522, 'lon' => -118.2437],
                    ],
                ],
                [
                    'lat' => 51.5074,
                    'lon' => -0.1278,
                    'name' => 'Europe',
                    'users' => [
                        ['lat' => 48.8566, 'lon' => 2.3522],
                        ['lat' => 52.5200, 'lon' => 13.4050],
                    ],
                ],
                [
                    'lat' => 35.6762,
                    'lon' => 139.6503,
                    'name' => 'Asia Pacific',
                    'users' => [
                        ['lat' => 1.3521, 'lon' => 103.8198],
                        ['lat' => -33.8688, 'lon' => 151.2093],
                    ],
                ],
            ],
        ]);
    }
}
