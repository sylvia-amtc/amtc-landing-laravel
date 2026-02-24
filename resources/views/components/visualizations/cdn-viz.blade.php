@props([
    'id' => 'cdn-viz-' . uniqid()
])

<div
    id="{{ $id }}"
    class="cdn-visualization relative w-full h-full"
    {{ $attributes }}
>
    <!-- CDN visualization rendered by visualizations.js via Vite -->
</div>
