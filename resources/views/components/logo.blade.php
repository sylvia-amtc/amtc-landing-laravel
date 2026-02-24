@props(['size' => 'default'])

@php
$sizes = [
    'small' => 'text-xl',
    'default' => 'text-2xl',
    'large' => 'text-4xl'
];
$textSize = $sizes[$size] ?? $sizes['default'];
@endphp

<div class="inline-flex items-center gap-2">
    <div class="relative">
        <span class="{{ $textSize }} font-display font-bold tracking-tight text-text-primary">
            AMTECCO
        </span>
        <!-- Corner accents -->
        <div class="absolute -top-1 -left-1 w-2 h-2 border-l-2 border-t-2 border-neo-mint"></div>
        <div class="absolute -bottom-1 -right-1 w-2 h-2 border-r-2 border-b-2 border-neo-mint"></div>
    </div>
</div>
