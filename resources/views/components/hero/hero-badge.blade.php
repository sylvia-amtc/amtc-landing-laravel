@props([
    'pulse' => true
])

<div {{ $attributes->merge(['class' => 'inline-flex items-center gap-2']) }}>
    <x-ui.badge color="mint" :animated="$pulse">
        @if($pulse)
            <span class="inline-block w-2 h-2 rounded-full bg-neo-mint animate-pulse"></span>
        @endif
        {{ $slot }}
    </x-ui.badge>
</div>
