@props([
    'title' => 'Frequently Asked Questions',
    'description' => 'Everything you need to know about our services',
    'faqs' => []
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

        <!-- FAQ Accordion -->
        <div class="space-y-4">
            @if(!empty($faqs))
                @foreach($faqs as $index => $faq)
                    <div class="bg-brand-card border border-brand-border rounded-xl overflow-hidden animate-on-scroll faq-item"
                         style="--animation-delay: {{ $index * 50 }}ms">
                        <!-- Question -->
                        <button
                            class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-brand-surface/50 transition-colors"
                        >
                            <span class="text-white font-semibold text-lg pr-4">
                                {{ $faq['question'] }}
                            </span>
                            <svg
                                class="faq-chevron w-5 h-5 text-brand-accent transform transition-transform"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Answer -->
                        <div class="faq-answer hidden px-6 pb-6 text-text-secondary leading-relaxed">
                            {{ $faq['answer'] }}
                        </div>
                    </div>
                @endforeach
            @else
                {{ $slot }}
            @endif
        </div>
    </x-layout.container>
</x-layout.section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.faq-toggle').forEach(button => {
            button.addEventListener('click', () => {
                const item = button.closest('.faq-item');
                const answer = item.querySelector('.faq-answer');
                const chevron = item.querySelector('.faq-chevron');

                answer.classList.toggle('hidden');
                chevron.classList.toggle('rotate-180');
            });
        });
    });
</script>
@endpush
