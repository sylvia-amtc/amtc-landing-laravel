@props([
    'spacing' => 'default',
    'background' => 'default'
])

@php
$spacingClasses = match($spacing) {
    'none' => '',
    'small' => 'py-12',
    'default' => 'py-16 md:py-24',
    'large' => 'py-24 md:py-32',
    default => 'py-16 md:py-24'
};

$backgroundClasses = match($background) {
    'default' => 'bg-brand-bg',
    'surface' => 'bg-brand-surface',
    'card' => 'bg-brand-card',
    'surface-light' => 'bg-brand-surface/50',
    'transparent' => '',
    default => 'bg-brand-bg'
};
@endphp

<section {{ $attributes->merge(['class' => "{$spacingClasses} {$backgroundClasses}"]) }}>
    {{ $slot }}
</section>
