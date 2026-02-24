@props([
    'stats' => []
])

<x-layout.section {{ $attributes }}>
    <x-layout.container>
        <x-layout.grid cols="4" gap="large" class="stagger-children">
            @if(!empty($stats))
                @foreach($stats as $stat)
                    <x-cards.stat-card
                        :number="$stat['number']"
                        :label="$stat['label']"
                        :suffix="$stat['suffix'] ?? ''"
                        :prefix="$stat['prefix'] ?? ''"
                        :animated="$stat['animated'] ?? true"
                    >
                        @if(isset($stat['description']))
                            {{ $stat['description'] }}
                        @endif
                    </x-cards.stat-card>
                @endforeach
            @else
                {{ $slot }}
            @endif
        </x-layout.grid>
    </x-layout.container>
</x-layout.section>
