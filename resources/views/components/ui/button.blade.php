@props([
    'variant' => 'primary',
    'size' => 'medium',
    'animated' => false,
    'type' => 'button',
    'href' => null
])

@php
$baseClasses = 'inline-flex items-center justify-center gap-2 font-bold rounded-xl transition-all duration-300 group';

$variantClasses = match($variant) {
    'primary' => 'bg-brand-accent hover:bg-brand-accent/90 text-white shadow-lg shadow-brand-accent/25 hover:shadow-brand-accent/40 hover:scale-105',
    'secondary' => 'border-2 border-brand-border hover:border-brand-accent text-white bg-brand-surface/50 hover:bg-brand-surface',
    'ghost' => 'text-text-secondary hover:text-white hover:bg-brand-surface/50',
    default => 'bg-brand-accent hover:bg-brand-accent/90 text-white'
};

$sizeClasses = match($size) {
    'small' => 'px-4 py-2 text-sm',
    'medium' => 'px-6 py-3 text-base',
    'large' => 'px-8 py-4 text-lg',
    default => 'px-6 py-3 text-base'
};

$tag = $href ? 'a' : 'button';
@endphp

<{{ $tag }}
    @if($href) href="{{ $href }}" @else type="{{ $type }}" @endif
    {{ $attributes->merge(['class' => "{$baseClasses} {$variantClasses} {$sizeClasses}"]) }}
>
    {{ $slot }}
    @if($animated)
        <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
        </svg>
    @endif
</{{ $tag }}>
