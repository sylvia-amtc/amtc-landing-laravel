@props([
    'quote',
    'author',
    'role',
    'company' => null,
    'image' => null
])

<div {{ $attributes->merge(['class' => 'bg-brand-card border border-brand-border rounded-2xl p-8 card-hover animate-on-scroll']) }}>
    <!-- Quote Icon -->
    <div class="text-brand-accent mb-4">
        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
        </svg>
    </div>

    <!-- Quote -->
    <p class="text-white text-lg leading-relaxed mb-6">
        "{{ $quote }}"
    </p>

    <!-- Author -->
    <div class="flex items-center gap-4">
        @if($image)
            <img src="{{ $image }}" alt="{{ $author }}" class="w-12 h-12 rounded-full">
        @else
            <div class="w-12 h-12 rounded-full bg-brand-accent/20 flex items-center justify-center text-brand-accent font-bold">
                {{ substr($author, 0, 1) }}
            </div>
        @endif
        <div>
            <div class="text-white font-semibold">{{ $author }}</div>
            <div class="text-text-secondary text-sm">
                {{ $role }}@if($company), {{ $company }}@endif
            </div>
        </div>
    </div>
</div>
