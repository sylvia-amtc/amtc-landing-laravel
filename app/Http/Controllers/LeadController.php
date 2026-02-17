<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'role' => 'nullable|string|max:255',
            'interest' => 'nullable|string|max:255',
            'distribution_points' => 'nullable|integer',
            'utm_source' => 'nullable|string|max:255',
            'utm_medium' => 'nullable|string|max:255',
            'utm_campaign' => 'nullable|string|max:255',
        ]);

        $lead = Lead::create($validated);

        return response()->json([
            'message' => 'Thank you! We\'ll be in touch soon.',
            'lead' => $lead,
        ], 201);
    }
}
