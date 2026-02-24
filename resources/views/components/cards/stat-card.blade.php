@props([
    'number',
    'label',
    'suffix' => '',
    'prefix' => '',
    'animated' => true
])

<div {{ $attributes->merge(['class' => 'bg-brand-card border border-brand-border rounded-2xl p-8 text-center card-hover animate-on-scroll']) }}>
    <div class="text-5xl font-bold text-white mb-2">
        @if($animated)
            <x-ui.animated-number :target="$number" :prefix="$prefix" :suffix="$suffix" />
        @else
            {{ $prefix }}{{ $number }}{{ $suffix }}
        @endif
    </div>
    <div class="text-text-secondary text-sm font-medium uppercase tracking-wide">
        {{ $label }}
    </div>
    @if($slot->isNotEmpty())
        <div class="mt-4 text-text-muted text-sm">
            {{ $slot }}
        </div>
    @endif
</div>
