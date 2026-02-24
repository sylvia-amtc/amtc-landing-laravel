@props([
    'name' => null,
    'size' => 'medium'
])

@php
$sizeClasses = match($size) {
    'small' => 'w-4 h-4',
    'medium' => 'w-6 h-6',
    'large' => 'w-8 h-8',
    'xl' => 'w-12 h-12',
    default => 'w-6 h-6'
};

// Common icons as inline SVG (Heroicons style)
$icons = [
    'check' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />',
    'chevron-down' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />',
    'broadcast' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />',
    'satellite' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />',
    'tv' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />',
    'cable' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />',
    'rocket' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />',
];
@endphp

@if($name && isset($icons[$name]))
    <svg
        {{ $attributes->merge(['class' => $sizeClasses]) }}
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
    >
        {!! $icons[$name] !!}
    </svg>
@elseif($slot->isNotEmpty())
    <span {{ $attributes->merge(['class' => $sizeClasses . ' inline-flex items-center justify-center']) }}>
        {{ $slot }}
    </span>
@else
    <svg
        {{ $attributes->merge(['class' => $sizeClasses]) }}
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
    >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
    </svg>
@endif
