<footer class="py-16 border-t border-brand-border">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-3 gap-12 mb-12">
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-8 h-8 rounded-lg bg-brand-accent flex items-center justify-center font-bold text-white text-sm">A</div>
                    <span class="text-xl font-bold text-white">amtc.tv</span>
                </div>
                <p class="text-brand-muted text-sm mb-2">by <a href="https://amtecco.com" class="text-white hover:text-brand-accent transition">Amtecco</a></p>
                <p class="text-brand-muted text-sm">Antwerp, Belgium</p>
                <p class="text-brand-muted text-xs mt-1">VAT: BE0748.398.550</p>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4">Links</h4>
                <ul class="space-y-2 text-sm text-brand-muted">
                    <li><a href="https://amtecco.com" class="hover:text-white transition">amtecco.com</a></li>
                    <li><a href="mailto:hello@amtecco.com" class="hover:text-white transition">Contact</a></li>
                    <li><a href="{{ route('privacy') }}" class="hover:text-white transition">Privacy Policy</a></li>
                    <li><a href="{{ route('terms') }}" class="hover:text-white transition">Terms</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4">Connect</h4>
                <div class="flex gap-4">
                    <a href="https://linkedin.com/company/amtecco" target="_blank" class="text-brand-muted hover:text-white transition" aria-label="LinkedIn">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a href="https://x.com/amtecco" target="_blank" class="text-brand-muted hover:text-white transition" aria-label="X / Twitter">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="border-t border-brand-border pt-8 text-center text-brand-muted text-xs">
            © {{ date('Y') }} Amtecco. All rights reserved.
        </div>
    </div>
</footer>
