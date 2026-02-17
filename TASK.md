# Task: Rebuild amtc.tv Landing Page in Laravel

## Context
We're rebuilding the Amtecco landing page (amtc.tv) from a monolithic single-file HTML into a proper Laravel application. The current site has broken links, placeholder analytics IDs, and no structure.

## Source Reference
The current site is at: `/root/.openclaw/workspace/amtc-landing/public/index.html`
Port it to Laravel, fixing all issues below.

## Requirements

### 1. Laravel Structure
- Blade templates with reusable components (header, footer, hero, sections)
- Proper routing (`web.php`) for all pages
- Tailwind CSS via Vite (NOT CDN `<script>` tag)
- SQLite database for lead storage

### 2. Pages to Build
- **/** — Landing page (port existing design, same sections: hero, problem, solutions, comparison, social proof, lead capture, resources, footer)
- **/privacy** — Privacy policy page (basic but real content for Amtecco, Belgian company, VAT BE0748.398.550)
- **/terms** — Terms of service page (basic but real content)
- **/blog/satellite-vs-srt-cost** — Blog post: "Satellite vs SRT: Real Cost Comparison for TV Channels"
- **/blog/srt-distribution-guide** — Blog post: "SRT Distribution: Complete Guide for Broadcast Engineers"
- **/blog/cdn-vs-broadcast-cdn** — Blog post: "Why Traditional CDNs Fail for Professional Live Feeds"
- **/blog/satellite-to-ip-migration** — Blog post: "How to Migrate from Satellite to IP in 24 Hours"

### 3. Lead Capture Form
- POST `/api/leads` route with proper validation
- Store in SQLite `leads` table (name, email, company, role, interest, distribution_points, utm_source, utm_medium, utm_campaign)
- Return JSON response
- CSRF protection

### 4. Fix All Broken Links
- All nav links must work (anchor links on landing, page links for privacy/terms)
- All blog links must route to real pages with real content
- ROI calculator link → either build a simple one or link to `#get-started`
- ROI report download link → remove or replace with real CTA
- Social links (LinkedIn, X) — keep as-is (external)

### 5. Analytics
- Remove placeholder GTM/GA4/Hotjar tags (use `@env('production')` guards so they only render with real IDs from `.env`)
- Add `.env` variables: `GTM_ID`, `GA4_ID`, `HOTJAR_ID`

### 6. Design
- Keep the EXACT same visual design (dark theme, indigo accent, green accents, Inter font)
- Same Tailwind color palette (brand-bg, brand-surface, brand-accent, etc.)
- Same animations (fade-in, card-hover, pulse-badge)
- Responsive (mobile menu, grid layouts)

### 7. Blog Content
- Each blog post should be 800-1200 words of real, useful content about broadcast/SRT technology
- Use Amtecco's perspective as an SRT distribution provider
- Include CTAs back to the main landing page

### 8. Infrastructure Note
- All infrastructure runs through Cloudflare (DNS, Tunnels)
- App should be deployable behind Cloudflare Tunnel
- No hardcoded server IPs

## Acceptance Criteria
- `php artisan serve` runs without errors
- All routes return 200
- Lead form submits successfully and stores in DB
- No broken links (all `<a href>` resolve to real pages)
- Mobile responsive
- Blog posts have real content
- Privacy/Terms pages have real content
