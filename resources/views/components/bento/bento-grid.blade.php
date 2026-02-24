@props([
    'title' => 'Two Ways to Reach the World',
    'description' => 'From ingest to edge. Your content, everywhere.'
])

<x-layout.section background="surface-light" {{ $attributes }}>
    <x-layout.container>
        <!-- Section Header -->
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-5xl font-display font-bold gradient-text-new">
                {{ $title }}
            </h2>
            <p class="text-text-secondary text-xl mt-4">
                {{ $description }}
            </p>
        </div>

        <!-- Bento Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-6 auto-rows-min">

            <!-- SRT Distribution - Large Card -->
            <x-bento.bento-item size="large" variant="primary">
                <x-cards.solution-card
                    title="SRT Distribution"
                    description="One input. Unlimited destinations."
                    badge="Available Now"
                    badgeColor="green"
                    price="€129.99"
                    priceNote="/month per destination"
                    :features="[
                        'Sub-second latency',
                        'Automatic failover',
                        '200+ global endpoints'
                    ]"
                    buttonText="Get Started →"
                    buttonVariant="primary"
                    buttonUrl="#contact"
                >
                    <x-slot:visualization>
                        <x-visualizations.srt-viz />
                    </x-slot:visualization>
                </x-cards.solution-card>
            </x-bento.bento-item>

            <!-- CDN Delivery - Large Card -->
            <x-bento.bento-item size="large" variant="secondary">
                <x-cards.solution-card
                    title="Broadcast CDN"
                    description="HLS/DASH delivery at scale."
                    badge="Coming Soon"
                    badgeColor="blue"
                    buttonText="Join Waitlist →"
                    buttonVariant="secondary"
                    buttonUrl="#waitlist"
                >
                    <x-slot:visualization>
                        <x-visualizations.cdn-viz />
                    </x-slot:visualization>
                    <x-slot:content>
                        <p class="text-text-secondary text-sm">
                            Scalable edge network delivering to thousands simultaneously.
                            Join the waitlist for early access.
                        </p>
                    </x-slot:content>
                </x-cards.solution-card>
            </x-bento.bento-item>

            {{ $slot }}

        </div>
    </x-layout.container>
</x-layout.section>
