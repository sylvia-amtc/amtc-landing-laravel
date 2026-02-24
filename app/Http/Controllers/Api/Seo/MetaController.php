<?php

namespace App\Http\Controllers\Api\Seo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Seo\StorePageSeoMetaRequest;
use App\Http\Requests\Seo\UpdatePageSeoMetaRequest;
use App\Models\PageSeoMeta;

class MetaController extends Controller
{
    public function index()
    {
        $pages = PageSeoMeta::all();

        return response()->json($pages);
    }

    public function show(string $page)
    {
        $meta = PageSeoMeta::where('page', $page)->firstOrFail();

        return response()->json($meta);
    }

    public function store(StorePageSeoMetaRequest $request)
    {
        $meta = PageSeoMeta::create($request->validated());

        return response()->json([
            'message' => 'SEO meta created successfully',
            'data' => $meta,
        ], 201);
    }

    public function update(UpdatePageSeoMetaRequest $request, string $page)
    {
        $meta = PageSeoMeta::where('page', $page)->firstOrFail();
        $meta->update($request->validated());

        return response()->json([
            'message' => 'SEO meta updated successfully',
            'data' => $meta,
        ]);
    }

    public function destroy(string $page)
    {
        $meta = PageSeoMeta::where('page', $page)->firstOrFail();
        $meta->delete();

        return response()->json([
            'message' => 'SEO meta deleted successfully',
        ]);
    }
}
