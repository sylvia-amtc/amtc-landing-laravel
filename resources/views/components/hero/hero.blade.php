@props([
    'badgeText' => 'SRT Distribution Live',
    'showGlobe' => true
])

<section class="hero-section relative min-h-screen flex items-center overflow-hidden bg-brand-bg" {{ $attributes }}>
    <!-- Animated gradient background -->
    <div class="absolute inset-0 gradient-hero opacity-10"></div>

    <!-- Floating particles (CSS animation) -->
    <div class="absolute inset-0 particles-container"></div>

    <x-layout.container class="relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- Left: Content -->
            <div class="hero-content text-center lg:text-left space-y-8">
                <x-hero.hero-badge>{{ $badgeText }}</x-hero.hero-badge>

                <x-hero.hero-headline>
                    {{ $headline }}
                </x-hero.hero-headline>

                <p class="text-xl text-text-secondary max-w-2xl mx-auto lg:mx-0">
                    {{ $description }}
                </p>

                <x-hero.hero-cta />

                <!-- Trust badges (fade in sequentially) -->
                <div class="mt-12 flex flex-wrap justify-center lg:justify-start gap-6">
                    <div class="trust-badge flex items-center gap-2 text-text-secondary" style="--delay: 0s">
                        <x-ui.icon name="broadcast" class="text-neo-mint" />
                        <span class="text-sm font-medium">Broadcasters</span>
                    </div>
                    <div class="trust-badge flex items-center gap-2 text-text-secondary" style="--delay: 0.2s">
                        <x-ui.icon name="satellite" class="text-neo-mint" />
                        <span class="text-sm font-medium">Teleport Operators</span>
                    </div>
                    <div class="trust-badge flex items-center gap-2 text-text-secondary" style="--delay: 0.4s">
                        <x-ui.icon name="tv" class="text-neo-mint" />
                        <span class="text-sm font-medium">OTT Distributors</span>
                    </div>
                    <div class="trust-badge flex items-center gap-2 text-text-secondary" style="--delay: 0.6s">
                        <x-ui.icon name="cable" class="text-neo-mint" />
                        <span class="text-sm font-medium">Cable Operators</span>
                    </div>
                </div>
            </div>

            <!-- Right: D3 Globe Visualization -->
            @if($showGlobe)
                <div class="hidden lg:block">
                    <x-visualizations.globe-viz />
                </div>
            @endif

        </div>
    </x-layout.container>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <x-ui.icon name="chevron-down" class="text-text-muted" size="large" />
    </div>
</section>
