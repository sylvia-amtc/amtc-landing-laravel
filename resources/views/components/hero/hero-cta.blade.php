@props([
    'primaryText' => 'Get Started',
    'primaryUrl' => '#contact',
    'secondaryText' => 'View Calculator',
    'secondaryUrl' => '/calculator'
])

<div {{ $attributes->merge(['class' => 'flex flex-col sm:flex-row gap-4 justify-center lg:justify-start']) }}>
    <x-ui.button variant="primary" size="large" :animated="true" :href="$primaryUrl">
        {{ $primaryText }}
    </x-ui.button>

    <x-ui.button variant="secondary" size="large" :href="$secondaryUrl">
        {{ $secondaryText }}
    </x-ui.button>
</div>
