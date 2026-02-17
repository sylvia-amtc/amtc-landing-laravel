<header class="fixed top-0 w-full z-50 bg-brand-bg/80 backdrop-blur-xl border-b border-brand-border/50">
    <nav class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="/" class="flex items-center gap-3">
            <div class="w-8 h-8 rounded-lg bg-brand-accent flex items-center justify-center font-bold text-white text-sm">A</div>
            <span class="text-xl font-bold text-white">amtc.tv</span>
            <span class="text-xs text-brand-muted mt-1">by Amtecco</span>
        </a>
        <div class="hidden md:flex items-center gap-8 text-sm text-brand-muted">
            <a href="#solutions" class="hover:text-white transition">Solutions</a>
            <a href="#compare" class="hover:text-white transition">Compare</a>
            <a href="#resources" class="hover:text-white transition">Resources</a>
            <a href="#get-started" class="bg-brand-accent hover:bg-brand-accent2 text-white px-5 py-2.5 rounded-lg font-semibold transition">Get Started</a>
        </div>
        <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="md:hidden text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
    </nav>
    <div id="mobile-menu" class="hidden md:hidden px-6 pb-4 space-y-3">
        <a href="#solutions" class="block text-brand-muted hover:text-white">Solutions</a>
        <a href="#compare" class="block text-brand-muted hover:text-white">Compare</a>
        <a href="#resources" class="block text-brand-muted hover:text-white">Resources</a>
        <a href="#get-started" class="block bg-brand-accent text-white px-5 py-2.5 rounded-lg font-semibold text-center">Get Started</a>
    </div>
</header>
