@props([
    'animated' => true,
    'gradient' => 'default'
])

@php
$baseClasses = 'bg-clip-text text-transparent';

$gradientClasses = match($gradient) {
    'default' => 'bg-gradient-to-r from-brand-accent via-purple-400 to-brand-accent',
    'mint' => 'bg-gradient-to-r from-neo-mint via-green-300 to-neo-mint',
    'blue' => 'bg-gradient-to-r from-blue-400 via-cyan-400 to-blue-400',
    default => 'bg-gradient-to-r from-brand-accent via-purple-400 to-brand-accent'
};

$animationClass = $animated ? 'gradient-text-animated' : '';
@endphp

<span {{ $attributes->merge(['class' => "{$baseClasses} {$gradientClasses} {$animationClass}"]) }}>
    {{ $slot }}
</span>
