@props([
    'width' => 'default',
    'padding' => true
])

@php
$widthClasses = match($width) {
    'narrow' => 'max-w-4xl',
    'default' => 'max-w-7xl',
    'wide' => 'max-w-[1400px]',
    'full' => 'max-w-full',
    default => 'max-w-7xl'
};

$paddingClasses = $padding ? 'px-4 sm:px-6 lg:px-8' : '';
@endphp

<div {{ $attributes->merge(['class' => "mx-auto {$widthClasses} {$paddingClasses}"]) }}>
    {{ $slot }}
</div>
