@props([
    'type' => 'success',
    'dismissible' => true
])

@php
$typeClasses = match($type) {
    'success' => 'bg-success/10 text-success border-success/30',
    'error' => 'bg-error/10 text-error border-error/30',
    'warning' => 'bg-warning/10 text-warning border-warning/30',
    'info' => 'bg-brand-accent/10 text-brand-accent border-brand-accent/30',
    default => 'bg-brand-surface text-text-secondary border-brand-border'
};
@endphp

<div {{ $attributes->merge(['class' => "flex items-start gap-3 p-4 rounded-xl border {$typeClasses}"]) }}>
    <div class="flex-shrink-0 mt-0.5">
        <x-ui.icon :name="$type === 'success' ? 'check' : 'check'" size="small" />
    </div>

    <div class="flex-1">
        {{ $slot }}
    </div>

    @if($dismissible)
        <button
            onclick="this.closest('[class*=rounded-xl]').remove()"
            class="flex-shrink-0 ml-2 hover:opacity-70 transition-opacity"
        >
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    @endif
</div>
