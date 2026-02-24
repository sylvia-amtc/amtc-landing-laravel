@props([
    'cols' => 'default',
    'gap' => 'default'
])

@php
$colsClasses = match($cols) {
    '1' => 'grid-cols-1',
    '2' => 'grid-cols-1 md:grid-cols-2',
    '3' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
    '4' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4',
    '6' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-6',
    'default' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
    default => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3'
};

$gapClasses = match($gap) {
    'none' => 'gap-0',
    'small' => 'gap-4',
    'default' => 'gap-6',
    'large' => 'gap-8',
    default => 'gap-6'
};
@endphp

<div {{ $attributes->merge(['class' => "grid {$colsClasses} {$gapClasses}"]) }}>
    {{ $slot }}
</div>
