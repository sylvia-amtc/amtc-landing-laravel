@props([
    'size' => 'default',
    'variant' => 'default'
])

@php
$sizeClasses = match($size) {
    'small' => 'lg:col-span-2 lg:row-span-1',
    'default' => 'lg:col-span-2 lg:row-span-1',
    'large' => 'lg:col-span-3 lg:row-span-2',
    'tall' => 'lg:col-span-2 lg:row-span-2',
    'wide' => 'lg:col-span-4 lg:row-span-1',
    default => 'lg:col-span-2 lg:row-span-1'
};

$variantClasses = match($variant) {
    'primary' => 'bg-brand-card border-2 border-neo-mint/30 shadow-xl hover:shadow-neo-mint/20',
    'secondary' => 'bg-brand-card border border-brand-border shadow-xl hover:shadow-brand-accent/20',
    'default' => 'bg-brand-card border border-brand-border shadow-lg',
    default => 'bg-brand-card border border-brand-border shadow-lg'
};
@endphp

<div
    {{ $attributes->merge(['class' => "rounded-3xl overflow-hidden group hover:scale-[1.02] transition-all duration-500 {$sizeClasses} {$variantClasses}"]) }}
>
    {{ $slot }}
</div>
