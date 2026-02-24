@props([
    'color' => 'default',
    'animated' => false
])

@php
$baseClasses = 'inline-flex items-center gap-2 px-3 py-1 text-sm font-semibold rounded-full';

$colorClasses = match($color) {
    'green' => 'bg-success/10 text-success border border-success/30',
    'blue' => 'bg-brand-accent/10 text-brand-accent border border-brand-accent/30',
    'yellow' => 'bg-warning/10 text-warning border border-warning/30',
    'red' => 'bg-error/10 text-error border border-error/30',
    'mint' => 'bg-neo-mint/10 text-neo-mint border border-neo-mint/30',
    default => 'bg-brand-surface text-text-secondary border border-brand-border'
};

$animationClass = $animated ? 'animate-pulse-glow' : '';
@endphp

<span {{ $attributes->merge(['class' => "{$baseClasses} {$colorClasses} {$animationClass}"]) }}>
    @if($animated && $color === 'green')
        <span class="w-2 h-2 rounded-full bg-success animate-pulse"></span>
    @endif
    {{ $slot }}
</span>
