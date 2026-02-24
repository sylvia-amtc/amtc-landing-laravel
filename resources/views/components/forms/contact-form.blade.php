@props([
    'title' => 'Get Started Today',
    'description' => 'Fill out the form below and we\'ll get back to you within 24 hours.',
    'action' => '/api/leads',
    'method' => 'POST'
])

<div {{ $attributes->merge(['class' => 'bg-brand-card border border-brand-border rounded-2xl p-8']) }}>
    <div class="mb-8">
        <h2 class="text-3xl font-display font-bold text-white mb-2">
            {{ $title }}
        </h2>
        <p class="text-text-secondary">
            {{ $description }}
        </p>
    </div>

    <form id="lead-form" action="{{ $action }}" method="{{ $method }}" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <x-forms.form-field
                label="First Name"
                name="first_name"
                type="text"
                placeholder="John"
                :required="true"
            />

            <x-forms.form-field
                label="Last Name"
                name="last_name"
                type="text"
                placeholder="Doe"
                :required="true"
            />
        </div>

        <x-forms.form-field
            label="Email Address"
            name="email"
            type="email"
            placeholder="john@example.com"
            :required="true"
        />

        <x-forms.form-field
            label="Company"
            name="company"
            type="text"
            placeholder="Your Company Name"
        />

        <x-forms.form-select
            label="Number of Distribution Points"
            name="distribution_points"
            :options="[
                '1' => '1-5 points',
                '5' => '5-10 points',
                '10' => '10-20 points',
                '20' => '20+ points'
            ]"
            placeholder="Select number of points"
            :required="true"
        />

        <x-forms.form-field
            label="Message"
            name="message"
            type="textarea"
            placeholder="Tell us about your broadcasting needs..."
        />

        <!-- Hidden UTM fields -->
        <input type="hidden" name="utm_source" id="utm_source">
        <input type="hidden" name="utm_medium" id="utm_medium">
        <input type="hidden" name="utm_campaign" id="utm_campaign">

        <div id="form-message" class="hidden"></div>

        <x-ui.button id="submit-btn" type="submit" variant="primary" size="large" class="w-full" :animated="true">
            Send Message
        </x-ui.button>
    </form>

    <!-- Trust indicators -->
    <div class="mt-8 pt-8 border-t border-brand-border">
        <div class="flex items-center justify-center gap-6 text-text-muted text-sm">
            <div class="flex items-center gap-2">
                <x-ui.icon name="check" class="text-neo-mint" size="small" />
                <span>24h response time</span>
            </div>
            <div class="flex items-center gap-2">
                <x-ui.icon name="check" class="text-neo-mint" size="small" />
                <span>No commitment required</span>
            </div>
        </div>
    </div>
</div>
