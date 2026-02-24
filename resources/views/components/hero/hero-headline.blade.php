@props([
    'size' => 'large'
])

@php
$sizeClasses = match($size) {
    'large' => 'text-5xl md:text-6xl lg:text-7xl',
    'medium' => 'text-4xl md:text-5xl lg:text-6xl',
    'small' => 'text-3xl md:text-4xl lg:text-5xl',
    default => 'text-5xl md:text-6xl lg:text-7xl'
};
@endphp

<h1 {{ $attributes->merge(['class' => "font-display font-bold leading-tight tracking-tight text-white {$sizeClasses}"]) }}>
    {{ $slot }}
</h1>
