@props([
    'icon',
    'title',
    'description',
    'badge' => null,
    'delay' => 0
])

<div
    class="bg-brand-card border border-brand-border rounded-2xl p-8 card-hover animate-on-scroll"
    style="--animation-delay: {{ $delay }}ms"
    {{ $attributes }}
>
    @if($badge)
        <x-ui.badge class="mb-4">{{ $badge }}</x-ui.badge>
    @endif

    <div class="w-14 h-14 rounded-xl bg-brand-accent/10 flex items-center justify-center mb-6">
        <x-ui.icon :name="$icon" class="w-7 h-7 text-brand-accent" />
    </div>

    <h3 class="text-white font-bold text-xl mb-3">{{ $title }}</h3>

    <p class="text-text-secondary leading-relaxed">{{ $description }}</p>

    @if($slot->isNotEmpty())
        <div class="mt-6">{{ $slot }}</div>
    @endif
</div>
