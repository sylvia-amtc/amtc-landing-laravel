<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SRT Cloud Distribution & Broadcast CDN | Amtecco')</title>
    <meta name="description" content="@yield('meta_description', 'Replace satellite with cloud SRT distribution. 95% cost savings, 24h setup, unlimited reach. From €129.99/month. Broadcast CDN coming soon.')">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:title" content="@yield('title', 'SRT Cloud Distribution & Broadcast CDN | Amtecco')">
    <meta property="og:description" content="@yield('meta_description', 'Replace satellite with cloud SRT distribution. 95% cost savings, 24h setup, unlimited reach. From €129.99/month.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('og-image.png') }}">
    <meta property="og:site_name" content="Amtecco">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'SRT Cloud Distribution & Broadcast CDN | Amtecco')">
    <meta name="twitter:description" content="@yield('meta_description', 'Replace satellite with cloud SRT distribution. 95% cost savings, 24h setup, unlimited reach. From €129.99/month.')">
    <meta name="twitter:image" content="{{ asset('og-image.png') }}">

    @if(config('services.gtm.id'))
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','{{ config('services.gtm.id') }}');</script>
    @endif

    @if(config('services.ga4.id'))
    <!-- GA4 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.ga4.id') }}"></script>
    <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','{{ config('services.ga4.id') }}');</script>
    @endif

    @if(config('services.hotjar.id'))
    <!-- Hotjar -->
    <script>(function(h,o,t,j,a,r){h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};h._hjSettings={hjid:{{ config('services.hotjar.id') }},hjsv:6};a=o.getElementsByTagName('head')[0];r=o.createElement('script');r.async=1;r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;a.appendChild(r);})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');</script>
    @endif

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Schema.org -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "Amtecco",
        "url": "https://amtecco.com",
        "logo": "https://amtecco.com/logo.png",
        "description": "Professional SRT Distribution & Broadcast CDN solutions",
        "address": { "@@type": "PostalAddress", "addressLocality": "Antwerp", "addressCountry": "BE" },
        "vatID": "BE0748.398.550"
    }
    </script>
    @stack('schema')
</head>
<body class="bg-brand-bg text-brand-text">
    @if(config('services.gtm.id'))
    <!-- GTM noscript -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ config('services.gtm.id') }}" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    @endif

    <x-header />

    <main>
        @yield('content')
    </main>

    <x-footer />
</body>
</html>
