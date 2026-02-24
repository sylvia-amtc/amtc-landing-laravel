@props([
    'id' => 'globe-viz-' . uniqid()
])

<div
    id="{{ $id }}"
    class="globe-container relative w-full max-w-[600px] h-[600px] mx-auto"
    {{ $attributes }}
>
    <!-- Globe rendered by visualizations.js via Vite -->
</div>
