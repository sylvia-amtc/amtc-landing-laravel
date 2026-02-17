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
<!-- SOCIAL PROOF -->
<section class="py-20 md:py-28 bg-brand-surface/30">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-16 fade-in">
      <h2 class="text-3xl md:text-5xl font-black text-white mb-4">Built for broadcasters. By broadcasters.</h2>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16 fade-in">
      <div class="bg-brand-surface border border-brand-border rounded-2xl p-6 text-center card-hover">
        <div class="text-4xl mb-3">📡</div>
        <div class="text-white font-semibold">Broadcasters</div>
      </div>
      <div class="bg-brand-surface border border-brand-border rounded-2xl p-6 text-center card-hover">
        <div class="text-4xl mb-3">🛰️</div>
        <div class="text-white font-semibold">Teleport Operators</div>
      </div>
      <div class="bg-brand-surface border border-brand-border rounded-2xl p-6 text-center card-hover">
        <div class="text-4xl mb-3">📺</div>
        <div class="text-white font-semibold">OTT Distributors</div>
      </div>
      <div class="bg-brand-surface border border-brand-border rounded-2xl p-6 text-center card-hover">
        <div class="text-4xl mb-3">🔌</div>
        <div class="text-white font-semibold">Cable Operators</div>
      </div>
    </div>
    <!-- Stats -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16 fade-in">
      <div class="text-center">
        <div class="text-4xl md:text-5xl font-black gradient-text">95%</div>
        <div class="text-brand-muted text-sm mt-1">Less Cost</div>
      </div>
      <div class="text-center">
        <div class="text-4xl md:text-5xl font-black gradient-text">24h</div>
        <div class="text-brand-muted text-sm mt-1">Setup</div>
      </div>
      <div class="text-center">
        <div class="text-4xl md:text-5xl font-black gradient-text">99.9%</div>
        <div class="text-brand-muted text-sm mt-1">Uptime</div>
      </div>
      <div class="text-center">
        <div class="text-4xl md:text-5xl font-black gradient-text">200+</div>
        <div class="text-brand-muted text-sm mt-1">Reach Points</div>
      </div>
    </div>
    <!-- Quote -->
    <div class="max-w-3xl mx-auto text-center fade-in">
      <blockquote class="text-xl md:text-2xl text-white/90 italic font-medium leading-relaxed">
        "SRT adoption reached 77% in broadcast — the industry has chosen."
      </blockquote>
      <p class="text-brand-muted text-sm mt-4">— Haivision SRT Alliance Survey, 2024</p>
    </div>
  </div>
</section>

<!-- RESOURCES -->
<section class="py-20 md:py-28 bg-brand-surface/30" id="resources">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-16 fade-in">
      <h2 class="text-3xl md:text-5xl font-black text-white mb-4">Resources for Broadcast Engineers</h2>
      <p class="text-brand-muted text-lg">Deep dives into SRT, satellite migration, and broadcast CDN technology.</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
      <a href="/blog/satellite-vs-srt-cost" class="bg-brand-surface border border-brand-border rounded-2xl p-6 card-hover group fade-in">
        <div class="text-xs text-brand-accent font-semibold mb-3">Cost Analysis</div>
        <h3 class="text-white font-bold mb-3 group-hover:text-brand-accent transition">Satellite vs SRT: Real Cost Comparison for TV Channels</h3>
        <span class="text-brand-muted text-sm flex items-center gap-1">Read more <span class="group-hover:translate-x-1 transition-transform">→</span></span>
      </a>
      <a href="/blog/srt-distribution-guide" class="bg-brand-surface border border-brand-border rounded-2xl p-6 card-hover group fade-in">
        <div class="text-xs text-brand-accent font-semibold mb-3">Technical Guide</div>
        <h3 class="text-white font-bold mb-3 group-hover:text-brand-accent transition">SRT Distribution: Complete Guide for Broadcast Engineers</h3>
        <span class="text-brand-muted text-sm flex items-center gap-1">Read more <span class="group-hover:translate-x-1 transition-transform">→</span></span>
      </a>
      <a href="/blog/cdn-vs-broadcast-cdn" class="bg-brand-surface border border-brand-border rounded-2xl p-6 card-hover group fade-in">
        <div class="text-xs text-brand-accent font-semibold mb-3">Industry Insight</div>
        <h3 class="text-white font-bold mb-3 group-hover:text-brand-accent transition">Why Traditional CDNs Fail for Professional Live Feeds</h3>
        <span class="text-brand-muted text-sm flex items-center gap-1">Read more <span class="group-hover:translate-x-1 transition-transform">→</span></span>
      </a>
      <a href="/blog/satellite-to-ip-migration" class="bg-brand-surface border border-brand-border rounded-2xl p-6 card-hover group fade-in">
        <div class="text-xs text-brand-accent font-semibold mb-3">Migration Guide</div>
        <h3 class="text-white font-bold mb-3 group-hover:text-brand-accent transition">How to Migrate from Satellite to IP in 24 Hours</h3>
        <span class="text-brand-muted text-sm flex items-center gap-1">Read more <span class="group-hover:translate-x-1 transition-transform">→</span></span>
      </a>
    </div>
  </div>
</section>

<!-- GET STARTED -->
<section class="py-20 md:py-28" id="get-started">
  <div class="max-w-3xl mx-auto px-6">
    <div class="text-center mb-12 fade-in">
      <h2 class="text-3xl md:text-5xl font-black text-white mb-4">Start Broadcasting in 24 Hours</h2>
      <p class="text-brand-muted text-lg">Tell us about your distribution needs. We'll have a proposal ready within one business day.</p>
    </div>
    <div class="bg-brand-surface border border-brand-border rounded-2xl p-8 md:p-12 glow fade-in">
      <form id="lead-form" class="space-y-6">
        <input type="hidden" name="utm_source" id="utm_source">
        <input type="hidden" name="utm_medium" id="utm_medium">
        <input type="hidden" name="utm_campaign" id="utm_campaign">

        <div class="grid md:grid-cols-2 gap-6">
          <div>
            <label for="name" class="block text-sm font-medium text-brand-muted mb-2">Full Name <span class="text-red-400">*</span></label>
            <input type="text" id="name" name="name" required placeholder="John Smith" class="w-full bg-brand-bg border border-brand-border rounded-xl px-4 py-3 text-white placeholder-brand-muted/50 focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent transition">
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-brand-muted mb-2">Work Email <span class="text-red-400">*</span></label>
            <input type="email" id="email" name="email" required placeholder="john@broadcaster.com" class="w-full bg-brand-bg border border-brand-border rounded-xl px-4 py-3 text-white placeholder-brand-muted/50 focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent transition">
          </div>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
          <div>
            <label for="company" class="block text-sm font-medium text-brand-muted mb-2">Company <span class="text-red-400">*</span></label>
            <input type="text" id="company" name="company" required placeholder="Acme Broadcasting" class="w-full bg-brand-bg border border-brand-border rounded-xl px-4 py-3 text-white placeholder-brand-muted/50 focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent transition">
          </div>
          <div>
            <label for="role" class="block text-sm font-medium text-brand-muted mb-2">Role</label>
            <select id="role" name="role" class="w-full bg-brand-bg border border-brand-border rounded-xl px-4 py-3 text-white focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent transition">
              <option value="">Select your role</option>
              <option>CTO</option>
              <option>VP Engineering</option>
              <option>VP Operations</option>
              <option>Head of Distribution</option>
              <option>Other</option>
            </select>
          </div>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
          <div>
            <label for="interest" class="block text-sm font-medium text-brand-muted mb-2">Interest</label>
            <select id="interest" name="interest" class="w-full bg-brand-bg border border-brand-border rounded-xl px-4 py-3 text-white focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent transition">
              <option value="">What are you interested in?</option>
              <option>SRT Distribution</option>
              <option>Broadcast CDN</option>
              <option>Both</option>
            </select>
          </div>
          <div>
            <label for="distribution_points" class="block text-sm font-medium text-brand-muted mb-2">Distribution Points</label>
            <input type="number" id="distribution_points" name="distribution_points" placeholder="How many destinations?" min="1" class="w-full bg-brand-bg border border-brand-border rounded-xl px-4 py-3 text-white placeholder-brand-muted/50 focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent transition">
          </div>
        </div>
        <button type="submit" id="submit-btn" class="w-full bg-brand-accent hover:bg-brand-accent2 text-white font-bold py-4 rounded-xl text-lg transition shadow-lg shadow-brand-accent/25 hover:shadow-brand-accent/40">
          Get Started — It's Free to Talk
        </button>
        <div id="form-message" class="hidden text-center py-3 rounded-xl text-sm font-medium"></div>
      </form>
      <p class="text-center text-brand-muted text-sm mt-6">
        Or <a href="#" class="text-brand-accent hover:text-brand-accent2 underline">download our free SRT vs Satellite ROI Report</a>
      </p>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="py-20 md:py-28" id="faq">
  <div class="max-w-3xl mx-auto px-6">
    <div class="text-center mb-16 fade-in">
      <h2 class="text-3xl md:text-5xl font-black text-white mb-4">Frequently Asked Questions</h2>
    </div>
    <div class="space-y-4 fade-in">
      <details class="bg-brand-surface border border-brand-border rounded-2xl p-6 group">
        <summary class="text-white font-bold cursor-pointer list-none flex items-center justify-between">
          How much does SRT distribution cost?
          <span class="text-brand-muted group-open:rotate-45 transition-transform text-xl">+</span>
        </summary>
        <p class="text-brand-muted mt-4">Amtecco SRT Cloud Distribution starts at €129.99 per distribution point per month — up to 95% less than traditional satellite.</p>
      </details>
      <details class="bg-brand-surface border border-brand-border rounded-2xl p-6 group">
        <summary class="text-white font-bold cursor-pointer list-none flex items-center justify-between">
          How fast can I set up SRT distribution?
          <span class="text-brand-muted group-open:rotate-45 transition-transform text-xl">+</span>
        </summary>
        <p class="text-brand-muted mt-4">Go live in 24 hours. Send us your SRT stream and we handle the rest.</p>
      </details>
      <details class="bg-brand-surface border border-brand-border rounded-2xl p-6 group">
        <summary class="text-white font-bold cursor-pointer list-none flex items-center justify-between">
          What is SRT?
          <span class="text-brand-muted group-open:rotate-45 transition-transform text-xl">+</span>
        </summary>
        <p class="text-brand-muted mt-4">Secure Reliable Transport (SRT) is an open-source protocol for low-latency video transport over the public internet. It's adopted by 77% of broadcast organizations.</p>
      </details>
    </div>
  </div>
</section>
@endsection
