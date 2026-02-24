@props([
    'title',
    'description',
    'badge',
    'badgeColor' => 'green',
    'price' => null,
    'priceNote' => null,
    'features' => [],
    'buttonText' => 'Get Started',
    'buttonVariant' => 'primary',
    'buttonUrl' => '#contact'
])

<div {{ $attributes->merge(['class' => 'flex flex-col h-full']) }}>
    <!-- Header -->
    <div class="p-8">
        <x-ui.badge :color="$badgeColor" :animated="$badgeColor === 'green'">
            {{ $badge }}
        </x-ui.badge>
        <h3 class="text-3xl font-display font-bold mt-4 text-white">
            {{ $title }}
        </h3>
        <p class="text-text-secondary mt-2">
            {{ $description }}
        </p>
    </div>

    <!-- Visualization Slot -->
    @if(isset($visualization))
        <div class="h-80 relative">
            {{ $visualization }}
        </div>
    @endif

    <!-- Footer -->
    <div class="p-8 border-t border-brand-border mt-auto">
        @if($price)
            <div class="flex items-baseline gap-2 mb-2">
                <span class="text-5xl font-bold gradient-text">{{ $price }}</span>
                @if($priceNote)
                    <span class="text-text-muted">{{ $priceNote }}</span>
                @endif
            </div>
        @endif

        @if(!empty($features))
            <ul class="mt-6 space-y-3">
                @foreach($features as $feature)
                    <li class="flex items-center gap-3 text-text-secondary">
                        <x-ui.icon name="check" class="text-neo-mint flex-shrink-0" />
                        <span>{{ $feature }}</span>
                    </li>
                @endforeach
            </ul>
        @endif

        @if(isset($content))
            <div class="mt-4">
                {{ $content }}
            </div>
        @endif

        <x-ui.button :variant="$buttonVariant" class="w-full mt-6" size="large" :href="$buttonUrl">
            {{ $buttonText }}
        </x-ui.button>
    </div>
</div>
