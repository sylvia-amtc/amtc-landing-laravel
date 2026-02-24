@props([
    'title' => 'Why Choose AMTECCO?',
    'description' => 'Modern distribution vs. traditional satellite',
    'features' => []
])

<x-layout.section {{ $attributes }}>
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

        <!-- Comparison Table -->
        <div class="overflow-x-auto">
            <table class="w-full border-collapse animate-on-scroll">
                <thead>
                    <tr class="border-b-2 border-brand-border">
                        <th class="py-4 px-6 text-left text-text-secondary font-semibold uppercase tracking-wide text-sm">Feature</th>
                        <th class="py-4 px-6 text-center text-neo-mint font-bold uppercase tracking-wide text-sm">AMTECCO</th>
                        <th class="py-4 px-6 text-center text-text-muted font-semibold uppercase tracking-wide text-sm">Traditional Satellite</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($features))
                        @foreach($features as $index => $feature)
                            <tr class="border-b border-brand-border hover:bg-brand-surface/50 transition-colors">
                                <td class="py-4 px-6 text-white font-medium">{{ $feature['name'] }}</td>
                                <td class="py-4 px-6 text-center">
                                    @if($feature['amtecco'] === true)
                                        <x-ui.icon name="check" class="text-neo-mint mx-auto" />
                                    @else
                                        <span class="text-white font-semibold">{{ $feature['amtecco'] }}</span>
                                    @endif
                                </td>
                                <td class="py-4 px-6 text-center">
                                    @if($feature['satellite'] === false)
                                        <span class="text-error">✕</span>
                                    @elseif($feature['satellite'] === true)
                                        <x-ui.icon name="check" class="text-text-muted mx-auto" />
                                    @else
                                        <span class="text-text-muted">{{ $feature['satellite'] }}</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        {{ $slot }}
                    @endif
                </tbody>
            </table>
        </div>
    </x-layout.container>
</x-layout.section>
