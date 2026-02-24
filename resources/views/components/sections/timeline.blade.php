@props([
    'title' => 'How It Works',
    'description' => 'Get started in minutes, not months',
    'steps' => []
])

<x-layout.section {{ $attributes }}>
    <x-layout.container width="narrow">
        <!-- Section Header -->
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-5xl font-display font-bold gradient-text-new">
                {{ $title }}
            </h2>
            <p class="text-text-secondary text-xl mt-4">
                {{ $description }}
            </p>
        </div>

        <!-- Timeline -->
        <div class="space-y-12">
            @if(!empty($steps))
                @foreach($steps as $index => $step)
                    <div class="flex gap-8 animate-on-scroll" style="--animation-delay: {{ $index * 100 }}ms">
                        <!-- Step Number -->
                        <div class="flex-shrink-0">
                            <div class="w-16 h-16 rounded-full bg-brand-accent/10 border-2 border-brand-accent flex items-center justify-center">
                                <span class="text-2xl font-bold text-brand-accent">{{ $index + 1 }}</span>
                            </div>
                        </div>

                        <!-- Step Content -->
                        <div class="flex-1 pb-12 border-l-2 border-brand-border pl-8 -ml-[1px]">
                            <h3 class="text-2xl font-bold text-white mb-3">
                                {{ $step['title'] }}
                            </h3>
                            <p class="text-text-secondary leading-relaxed mb-4">
                                {{ $step['description'] }}
                            </p>
                            @if(isset($step['visual']))
                                <div class="mt-6 p-6 bg-brand-card border border-brand-border rounded-xl">
                                    {{ $step['visual'] }}
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            @else
                {{ $slot }}
            @endif
        </div>
    </x-layout.container>
</x-layout.section>
