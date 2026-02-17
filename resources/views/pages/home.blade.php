@extends('layouts.app')

@section('content')
<!-- HERO -->
<section class="pt-32 pb-20 md:pt-44 md:pb-32 relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-b from-brand-accent/5 via-transparent to-transparent"></div>
  <div class="absolute top-20 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-brand-accent/5 rounded-full blur-3xl"></div>
  <div class="max-w-5xl mx-auto px-6 text-center relative">
    <div class="inline-flex items-center gap-2 bg-brand-surface border border-brand-border rounded-full px-4 py-2 text-sm mb-8">
      <span class="w-2 h-2 bg-brand-green rounded-full pulse-badge"></span>
      <span class="text-brand-muted">SRT Distribution — Available Now</span>
    </div>
    <h1 class="text-4xl md:text-6xl lg:text-7xl font-black leading-tight mb-6">
      <span class="gradient-text">SRT Cloud Distribution</span><br>
      <span class="text-white">& Broadcast CDN — Simplified</span>
    </h1>
    <p class="text-lg md:text-xl text-brand-muted max-w-2xl mx-auto mb-10 leading-relaxed">
      Replace satellite. Reach everywhere.<br class="hidden md:block"> From <span class="text-white font-semibold">€129.99/month</span> per destination.
    </p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16">
      <a href="#get-started" class="bg-brand-accent hover:bg-brand-accent2 text-white px-8 py-4 rounded-xl font-bold text-lg transition shadow-lg shadow-brand-accent/25 hover:shadow-brand-accent/40">
        Get Started
      </a>
      <a href="https://amtecco.com?calculator=true" target="_blank" class="border border-brand-border hover:border-brand-accent text-white px-8 py-4 rounded-xl font-semibold text-lg transition bg-brand-surface/50 hover:bg-brand-surface">
        See How Much You'd Save →
      </a>
    </div>
    <!-- Trust bar -->
    <div class="flex flex-wrap justify-center items-center gap-8 text-brand-muted text-sm">
      <span class="flex items-center gap-2"><span class="text-2xl">📡</span> Broadcasters</span>
      <span class="flex items-center gap-2"><span class="text-2xl">🛰️</span> Teleport Operators</span>
      <span class="flex items-center gap-2"><span class="text-2xl">📺</span> OTT Distributors</span>
      <span class="flex items-center gap-2"><span class="text-2xl">🔌</span> Cable Operators</span>
    </div>
    <p class="text-brand-muted/60 text-xs mt-4">Trusted by broadcasters worldwide</p>
  </div>
</section>

<!-- PROBLEM -->
<section class="py-20 md:py-28" id="problem">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-16 fade-in">
      <h2 class="text-3xl md:text-5xl font-black text-white mb-4">Satellite is holding you back</h2>
      <p class="text-brand-muted text-lg max-w-2xl mx-auto">The broadcast industry has moved on. Why are you still paying satellite prices for satellite problems?</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="bg-brand-surface border border-brand-border rounded-2xl p-6 card-hover fade-in">
        <div class="text-4xl mb-4">💰</div>
        <h3 class="text-white font-bold text-lg mb-3">Crushing Costs</h3>
        <div class="space-y-2 text-sm">
          <div class="text-red-400/80 line-through">€4.5K–10K/mo satellite</div>
          <div class="text-brand-green font-semibold">€200–500/mo with Amtecco</div>
        </div>
        <div class="mt-4 text-xs bg-brand-green/10 text-brand-green px-3 py-1.5 rounded-full inline-block font-medium">Up to 95% savings</div>
      </div>
      <div class="bg-brand-surface border border-brand-border rounded-2xl p-6 card-hover fade-in">
        <div class="text-4xl mb-4">⏱️</div>
        <h3 class="text-white font-bold text-lg mb-3">Endless Setup</h3>
        <div class="space-y-2 text-sm">
          <div class="text-red-400/80 line-through">2–8 week provisioning</div>
          <div class="text-brand-green font-semibold">Live in 24 hours</div>
        </div>
        <div class="mt-4 text-xs bg-brand-green/10 text-brand-green px-3 py-1.5 rounded-full inline-block font-medium">From weeks to hours</div>
      </div>
      <div class="bg-brand-surface border border-brand-border rounded-2xl p-6 card-hover fade-in">
        <div class="text-4xl mb-4">🔧</div>
        <h3 class="text-white font-bold text-lg mb-3">Vendor Chaos</h3>
        <div class="space-y-2 text-sm">
          <div class="text-red-400/80 line-through">Complex multi-vendor stacks</div>
          <div class="text-brand-green font-semibold">Single pane of glass</div>
        </div>
        <div class="mt-4 text-xs bg-brand-green/10 text-brand-green px-3 py-1.5 rounded-full inline-block font-medium">One platform, one SLA</div>
      </div>
      <div class="bg-brand-surface border border-brand-border rounded-2xl p-6 card-hover fade-in">
        <div class="text-4xl mb-4">☁️</div>
        <h3 class="text-white font-bold text-lg mb-3">Weather Roulette</h3>
        <div class="space-y-2 text-sm">
          <div class="text-red-400/80 line-through">Weather-dependent signal</div>
          <div class="text-brand-green font-semibold">99.9% cloud uptime</div>
        </div>
        <div class="mt-4 text-xs bg-brand-green/10 text-brand-green px-3 py-1.5 rounded-full inline-block font-medium">Rain or shine</div>
      </div>
    </div>
  </div>
</section>
@endsection
