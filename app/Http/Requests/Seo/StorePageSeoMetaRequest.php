<?php

namespace App\Http\Requests\Seo;

use Illuminate\Foundation\Http\FormRequest;

class StorePageSeoMetaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Handle via Sanctum middleware
    }

    public function rules(): array
    {
        return [
            'page' => 'required|string|max:255|unique:page_seo_meta,page',
            'title' => 'required|string|max:60',
            'description' => 'required|string|max:160',
            'keywords' => 'nullable|array',
            'keywords.*' => 'string|max:50',
            'og_title' => 'nullable|string|max:60',
            'og_description' => 'nullable|string|max:160',
            'og_image' => 'nullable|url',
            'twitter_card' => 'nullable|string|in:summary,summary_large_image',
            'canonical_url' => 'nullable|url',
            'robots' => 'nullable|string',
            'structured_data' => 'nullable|array',
        ];
    }

    public function messages(): array
    {
        return [
            'title.max' => 'SEO title should not exceed 60 characters.',
            'description.max' => 'Meta description should be 150-160 characters.',
        ];
    }
}
