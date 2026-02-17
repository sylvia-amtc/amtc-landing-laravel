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
<!-- SOLUTIONS -->
<section class="py-20 md:py-28 bg-brand-surface/30" id="solutions">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-16 fade-in">
      <h2 class="text-3xl md:text-5xl font-black text-white mb-4">Two ways to reach the world</h2>
      <p class="text-brand-muted text-lg">From ingest to edge. Your content, everywhere.</p>
    </div>
    <div class="grid lg:grid-cols-2 gap-8 mb-10">
      <!-- SRT Distribution -->
      <div class="bg-brand-surface border border-brand-green/30 rounded-2xl p-8 relative glow-green card-hover fade-in">
        <div class="absolute -top-3 left-8">
          <span class="bg-brand-green text-black text-xs font-bold px-4 py-1.5 rounded-full pulse-badge">Available Now</span>
        </div>
        <div class="mt-4">
          <h3 class="text-2xl md:text-3xl font-bold text-white mb-2">SRT Distribution</h3>
          <p class="text-brand-muted mb-6">One input. Unlimited destinations. Cloud-based.</p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-brand-green mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span>24h setup — go live tomorrow</span></li>
            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-brand-green mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span><strong class="text-white">€129.99</strong> per distribution point/month</span></li>
            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-brand-green mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span>95% cost savings vs satellite</span></li>
            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-brand-green mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span>Unlimited global reach</span></li>
            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-brand-green mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span>SRT protocol — secure, reliable, low-latency</span></li>
          </ul>
          <a href="#get-started" class="inline-flex items-center gap-2 bg-brand-green hover:bg-green-400 text-black font-bold px-6 py-3 rounded-xl transition">
            Start Distributing <span>→</span>
          </a>
        </div>
      </div>
      <!-- Broadcast CDN -->
      <div class="bg-brand-surface border border-brand-border rounded-2xl p-8 relative glow card-hover fade-in">
        <div class="absolute -top-3 left-8">
          <span class="bg-brand-accent text-white text-xs font-bold px-4 py-1.5 rounded-full">Coming Soon</span>
        </div>
        <div class="mt-4">
          <h3 class="text-2xl md:text-3xl font-bold text-white mb-2">Broadcast CDN</h3>
          <p class="text-brand-muted mb-6">Purpose-built for live HLS/DASH delivery.</p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-brand-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span>Video-native, not generic file CDN</span></li>
            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-brand-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span>Broadcast-grade SLAs</span></li>
            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-brand-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span>SRT-to-edge pipeline</span></li>
            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-brand-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span>No protocol translation gaps</span></li>
            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-brand-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span>Built for professional live feeds</span></li>
          </ul>
          <a href="#get-started" class="inline-flex items-center gap-2 border border-brand-accent text-brand-accent hover:bg-brand-accent hover:text-white font-bold px-6 py-3 rounded-xl transition">
            Join the Waitlist <span>→</span>
          </a>
        </div>
      </div>
    </div>
    <!-- Cross-sell -->
    <div class="bg-gradient-to-r from-brand-accent/10 via-brand-surface to-brand-green/10 border border-brand-border rounded-2xl p-8 text-center fade-in">
      <p class="text-xl md:text-2xl font-bold text-white">End-to-end: SRT ingest to CDN edge. <span class="gradient-text">One vendor. One SLA.</span></p>
    </div>
  </div>
</section>

<!-- COMPARISON -->
<section class="py-20 md:py-28" id="compare">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-16 fade-in">
      <h2 class="text-3xl md:text-5xl font-black text-white mb-4">Why settle for less?</h2>
      <p class="text-brand-muted text-lg">See how Amtecco transforms what's possible.</p>
    </div>
    <div class="overflow-x-auto fade-in">
      <table class="w-full min-w-[700px] text-sm">
        <thead>
          <tr class="border-b border-brand-border">
            <th class="py-4 px-4 text-left text-brand-muted font-medium">Provider</th>
            <th class="py-4 px-4 text-center text-brand-muted font-medium">Setup Speed</th>
            <th class="py-4 px-4 text-center text-brand-muted font-medium">Scalability</th>
            <th class="py-4 px-4 text-center text-brand-muted font-medium">Complexity</th>
            <th class="py-4 px-4 text-center text-brand-muted font-medium">Global Reach</th>
            <th class="py-4 px-4 text-center text-brand-muted font-medium">Monthly Cost (HD)</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-brand-accent/10 border border-brand-accent/30 rounded-xl">
            <td class="py-5 px-4">
              <div class="flex items-center gap-2">
                <span class="font-bold text-white">Amtecco SRT</span>
                <span class="text-[10px] bg-brand-accent text-white px-2 py-0.5 rounded-full font-bold">Recommended</span>
              </div>
            </td>
            <td class="py-5 px-4 text-center text-brand-green font-semibold">24 hours</td>
            <td class="py-5 px-4 text-center text-brand-green font-semibold">Unlimited</td>
            <td class="py-5 px-4 text-center text-brand-green font-semibold">Beautifully Simple</td>
            <td class="py-5 px-4 text-center text-brand-green font-semibold">200+</td>
            <td class="py-5 px-4 text-center text-brand-green font-semibold">From €130/mo</td>
          </tr>
          <tr class="border-b border-brand-border/50">
            <td class="py-4 px-4 text-brand-muted">Traditional Satellite</td>
            <td class="py-4 px-4 text-center text-red-400/70">4–8 weeks</td>
            <td class="py-4 px-4 text-center text-yellow-400/70">Limited</td>
            <td class="py-4 px-4 text-center text-red-400/70">High</td>
            <td class="py-4 px-4 text-center text-yellow-400/70">Global*</td>
            <td class="py-4 px-4 text-center text-red-400/70">€4,500–10K/mo</td>
          </tr>
          <tr class="border-b border-brand-border/50">
            <td class="py-4 px-4 text-brand-muted">Haivision</td>
            <td class="py-4 px-4 text-center text-yellow-400/70">1–3 weeks</td>
            <td class="py-4 px-4 text-center text-yellow-400/70">Moderate</td>
            <td class="py-4 px-4 text-center text-yellow-400/70">Moderate</td>
            <td class="py-4 px-4 text-center text-red-400/70">Limited</td>
            <td class="py-4 px-4 text-center text-yellow-400/70">€2,000+/mo</td>
          </tr>
          <tr class="border-b border-brand-border/50">
            <td class="py-4 px-4 text-brand-muted">Zixi</td>
            <td class="py-4 px-4 text-center text-yellow-400/70">1–2 weeks</td>
            <td class="py-4 px-4 text-center text-brand-green/70">High</td>
            <td class="py-4 px-4 text-center text-red-400/70">High</td>
            <td class="py-4 px-4 text-center text-yellow-400/70">Moderate</td>
            <td class="py-4 px-4 text-center text-yellow-400/70">€1,500+/mo</td>
          </tr>
          <tr class="border-b border-brand-border/50">
            <td class="py-4 px-4 text-brand-muted">Akamai</td>
            <td class="py-4 px-4 text-center text-yellow-400/70">1–2 weeks</td>
            <td class="py-4 px-4 text-center text-brand-green/70">High</td>
            <td class="py-4 px-4 text-center text-yellow-400/70">Moderate</td>
            <td class="py-4 px-4 text-center text-brand-green/70">Global</td>
            <td class="py-4 px-4 text-center text-red-400/70">€3,000+/mo</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="mt-8 flex flex-wrap gap-6 justify-center text-xs text-brand-muted">
      <span class="flex items-center gap-2"><span class="w-3 h-3 rounded-full bg-brand-green/70"></span> Best in class</span>
      <span class="flex items-center gap-2"><span class="w-3 h-3 rounded-full bg-yellow-400/70"></span> Average</span>
      <span class="flex items-center gap-2"><span class="w-3 h-3 rounded-full bg-red-400/70"></span> Needs improvement</span>
    </div>
  </div>
</section>
@endsection
