@props([
    'id' => 'srt-viz-' . uniqid()
])

<div
    id="{{ $id }}"
    class="srt-visualization relative w-full h-full"
    {{ $attributes }}
>
    <!-- SRT visualization rendered by visualizations.js via Vite -->
</div>
