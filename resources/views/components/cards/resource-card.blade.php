@props([
    'title',
    'description',
    'url',
    'image' => null,
    'category' => null,
    'readTime' => null
])

<a href="{{ $url }}" {{ $attributes->merge(['class' => 'block bg-brand-card border border-brand-border rounded-2xl overflow-hidden card-hover animate-on-scroll group']) }}>
    @if($image)
        <div class="relative h-48 overflow-hidden">
            <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-brand-bg/80 to-transparent"></div>
        </div>
    @endif

    <div class="p-6">
        @if($category || $readTime)
            <div class="flex items-center gap-3 text-text-muted text-sm mb-3">
                @if($category)
                    <span class="uppercase tracking-wide font-medium">{{ $category }}</span>
                @endif
                @if($readTime)
                    <span>•</span>
                    <span>{{ $readTime }} min read</span>
                @endif
            </div>
        @endif

        <h3 class="text-white font-bold text-xl mb-2 group-hover:text-brand-accent transition-colors">
            {{ $title }}
        </h3>

        <p class="text-text-secondary leading-relaxed">
            {{ $description }}
        </p>

        <div class="mt-4 text-brand-accent font-medium flex items-center gap-2 group-hover:gap-4 transition-all">
            <span>Read more</span>
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
        </div>
    </div>
</a>
