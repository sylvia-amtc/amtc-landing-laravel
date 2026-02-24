@extends('layouts.app')

@section('content')

{{-- Hero Section with Globe Visualization --}}
<x-hero.hero
    badgeText="SRT Distribution Live"
    :showGlobe="true"
>
    <x-slot:headline>
        Broadcast Distribution,
        <x-ui.gradient-text :animated="true">Reimagined</x-ui.gradient-text>
    </x-slot:headline>

    <x-slot:description>
        Replace satellite. Reach everywhere.
        From <span class="text-white font-semibold">€129.99/month</span>.
    </x-slot:description>
</x-hero.hero>

{{-- Problem Section --}}
<x-layout.section id="problem">
    <x-layout.container>
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-5xl font-display font-bold text-white mb-4">Satellite is holding you back</h2>
            <p class="text-text-secondary text-xl max-w-2xl mx-auto">
                The broadcast industry has moved on. Why are you still paying satellite prices?
            </p>
        </div>

        <x-layout.grid cols="4" class="stagger-children">
            <x-cards.feature-card
                icon="rocket"
                title="Crushing Costs"
                description="Up to 95% savings compared to satellite distribution"
            >
                <div class="space-y-2 text-sm">
                    <div class="text-error/80 line-through">€4.5K–10K/mo satellite</div>
                    <div class="text-neo-mint font-semibold">€200–500/mo with AMTECCO</div>
                </div>
            </x-cards.feature-card>

            <x-cards.feature-card
                icon="rocket"
                title="Endless Setup"
                description="From weeks to hours - go live in 24 hours"
            >
                <div class="space-y-2 text-sm">
                    <div class="text-error/80 line-through">2–8 week provisioning</div>
                    <div class="text-neo-mint font-semibold">Live in 24 hours</div>
                </div>
            </x-cards.feature-card>

            <x-cards.feature-card
                icon="check"
                title="Vendor Chaos"
                description="Single platform, one SLA - no more multi-vendor headaches"
            >
                <div class="space-y-2 text-sm">
                    <div class="text-error/80 line-through">Complex multi-vendor stacks</div>
                    <div class="text-neo-mint font-semibold">Single pane of glass</div>
                </div>
            </x-cards.feature-card>

            <x-cards.feature-card
                icon="check"
                title="Weather Roulette"
                description="99.9% cloud uptime - rain or shine"
            >
                <div class="space-y-2 text-sm">
                    <div class="text-error/80 line-through">Weather-dependent signal</div>
                    <div class="text-neo-mint font-semibold">99.9% uptime</div>
                </div>
            </x-cards.feature-card>
        </x-layout.grid>
    </x-layout.container>
</x-layout.section>

{{-- Bento Grid - Solutions Showcase --}}
<x-bento.bento-grid
    id="solutions"
    title="Two Ways to Reach the World"
    description="From ingest to edge. Your content, everywhere."
/>

{{-- Stats Section --}}
<x-sections.stats-grid
    :stats="[
        ['number' => 200, 'label' => 'Global Endpoints', 'suffix' => '+', 'animated' => true],
        ['number' => 99.9, 'label' => 'Uptime SLA', 'suffix' => '%', 'animated' => true],
        ['number' => 24, 'label' => 'Hour Setup', 'suffix' => 'h', 'animated' => true],
        ['number' => 95, 'label' => 'Cost Savings', 'suffix' => '%', 'animated' => true],
    ]"
/>

{{-- How It Works Timeline --}}
<x-sections.timeline
    id="how-it-works"
    title="How It Works"
    description="Get started in minutes, not months"
    :steps="[
        [
            'title' => 'Upload Your Stream',
            'description' => 'Send your SRT stream to our ingest point. No complex setup, just point and stream.',
            'visual' => 'srt://ingest.amtecco.com:9000'
        ],
        [
            'title' => 'Global Distribution',
            'description' => 'Your content is automatically distributed to 200+ edge locations worldwide with sub-second latency.',
        ],
        [
            'title' => 'Monitor & Optimize',
            'description' => 'Track performance in real-time with our dashboard. Automatic failover ensures 99.9% uptime.',
        ],
        [
            'title' => 'Scale Effortlessly',
            'description' => 'Add new destinations instantly. No provisioning delays, no vendor negotiations.',
        ],
    ]"
/>

{{-- Comparison Table --}}
<x-sections.comparison-table
    id="comparison"
    title="Why Choose AMTECCO?"
    description="Modern distribution vs. traditional satellite"
    :features="[
        ['name' => 'Setup Time', 'amtecco' => '24 hours', 'satellite' => '2-8 weeks'],
        ['name' => 'Monthly Cost', 'amtecco' => '€129.99/destination', 'satellite' => '€4,500-10,000'],
        ['name' => 'Global Reach', 'amtecco' => true, 'satellite' => 'Limited'],
        ['name' => 'Weather Independent', 'amtecco' => true, 'satellite' => false],
        ['name' => 'Automatic Failover', 'amtecco' => true, 'satellite' => false],
        ['name' => 'Real-time Monitoring', 'amtecco' => true, 'satellite' => 'Limited'],
        ['name' => 'Scalability', 'amtecco' => 'Instant', 'satellite' => 'Weeks'],
        ['name' => 'SLA', 'amtecco' => '99.9%', 'satellite' => 'Varies'],
    ]"
/>

{{-- FAQ Section --}}
<x-sections.faq-accordion
    id="faq"
    title="Frequently Asked Questions"
    description="Everything you need to know about our services"
    :faqs="[
        [
            'question' => 'What is SRT distribution?',
            'answer' => 'SRT (Secure Reliable Transport) is an open-source protocol for low-latency video streaming. Our SRT distribution service takes your single input stream and delivers it to multiple destinations worldwide with sub-second latency and automatic error correction.'
        ],
        [
            'question' => 'How does pricing work?',
            'answer' => 'SRT distribution starts at €129.99/month per destination. Volume discounts are available for 10+ destinations. There are no setup fees or long-term contracts required.'
        ],
        [
            'question' => 'What is the setup time?',
            'answer' => 'You can go live within 24 hours of signing up. Our team handles the technical setup and provides you with your ingest endpoint and monitoring dashboard.'
        ],
        [
            'question' => 'What about the Broadcast CDN?',
            'answer' => 'Our Broadcast CDN for HLS/DASH delivery is currently in development. Join the waitlist to get early access and be notified when it launches.'
        ],
        [
            'question' => 'Do you offer an SLA?',
            'answer' => 'Yes, we offer a 99.9% uptime SLA with automatic failover across multiple redundant paths. Our global network ensures your streams stay live even during regional outages.'
        ],
    ]"
/>

{{-- Contact Form --}}
<x-layout.section id="get-started" background="surface">
    <x-layout.container width="narrow">
        <x-forms.contact-form
            title="Get Started Today"
            description="Fill out the form below and we'll get back to you within 24 hours."
        />
    </x-layout.container>
</x-layout.section>

@endsection
