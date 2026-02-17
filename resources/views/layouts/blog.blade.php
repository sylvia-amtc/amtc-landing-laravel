@extends('layouts.app')

@section('content')
<article class="max-w-3xl mx-auto px-4 sm:px-6 py-16 sm:py-24">
    {{-- Post Header --}}
    <header class="mb-12">
        <p class="text-brand-accent text-sm font-semibold uppercase tracking-wider mb-3">@yield('category', 'Broadcast Technology')</p>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-tight mb-4">@yield('headline')</h1>
        <div class="flex items-center gap-4 text-brand-muted text-sm">
            <time datetime="@yield('date_iso')">@yield('date_display')</time>
            <span>&middot;</span>
            <span>@yield('read_time', '5 min read')</span>
        </div>
    </header>

    {{-- Post Body --}}
    <div class="prose prose-invert prose-lg max-w-none
        prose-headings:text-white prose-headings:font-bold
        prose-h2:text-2xl prose-h2:mt-12 prose-h2:mb-4
        prose-h3:text-xl prose-h3:mt-8 prose-h3:mb-3
        prose-p:text-brand-text prose-p:leading-relaxed prose-p:mb-4
        prose-a:text-brand-accent hover:prose-a:text-brand-accent2
        prose-strong:text-white
        prose-ul:text-brand-text prose-ol:text-brand-text
        prose-li:mb-2">
        @yield('body')
    </div>

    {{-- CTA --}}
    <div class="mt-16 p-8 bg-brand-surface rounded-2xl border border-brand-border text-center">
        <h2 class="text-2xl font-bold text-white mb-3">Ready to Replace Satellite with SRT?</h2>
        <p class="text-brand-muted mb-6 max-w-lg mx-auto">Join TV channels saving up to 95% on distribution costs with Amtecco's cloud SRT platform. Setup in 24 hours.</p>
        <a href="{{ route('home') }}#lead-form" class="inline-block px-8 py-3 bg-brand-accent hover:bg-brand-accent2 text-white font-semibold rounded-lg transition-colors">
            Get Started — From €129.99/mo
        </a>
    </div>
</article>
@endsection
