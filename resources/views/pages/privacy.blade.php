@extends('layouts.app')

@section('title', 'Privacy Policy | Amtecco')
@section('meta_description', 'Privacy policy for Amtecco - learn how we collect, use, and protect your personal data under GDPR.')

@section('content')
<div class="min-h-screen bg-brand-bg">
    <div class="max-w-3xl mx-auto px-4 py-16 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-brand-text mb-8">Privacy Policy</h1>
        <p class="text-brand-muted mb-8">Last updated: February 2026</p>

        <div class="prose prose-invert max-w-none space-y-8 text-brand-text">
            <section>
                <h2 class="text-2xl font-semibold text-brand-text mb-4">1. Data Controller</h2>
                <p class="text-brand-muted leading-relaxed">
                    The data controller responsible for your personal data is:<br>
                    <strong class="text-brand-text">Amtecco</strong><br>
                    Belgium<br>
                    VAT: BE0748.398.550<br>
                    Email: <a href="mailto:privacy@amtc.tv" class="text-brand-accent hover:text-brand-accent2">privacy@amtc.tv</a>
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-brand-text mb-4">2. Data We Collect</h2>
                <p class="text-brand-muted leading-relaxed">
                    When you use our lead capture form, we collect the following personal data:
                </p>
                <ul class="list-disc list-inside text-brand-muted space-y-2 mt-2">
                    <li>Your name</li>
                    <li>Your email address</li>
                    <li>Your company name (if provided)</li>
                    <li>Your message or inquiry</li>
                </ul>
                <p class="text-brand-muted leading-relaxed mt-4">
                    We also collect standard web server logs (IP address, browser type, pages visited) for security and analytics purposes.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-brand-text mb-4">3. Purpose of Processing</h2>
                <p class="text-brand-muted leading-relaxed">
                    We process your personal data for the following purposes:
                </p>
                <ul class="list-disc list-inside text-brand-muted space-y-2 mt-2">
                    <li>To respond to your inquiries and provide information about our services</li>
                    <li>To send you relevant communications about our SRT cloud distribution and broadcast CDN services</li>
                    <li>To improve our website and services</li>
                    <li>To comply with legal obligations</li>
                </ul>
                <p class="text-brand-muted leading-relaxed mt-4">
                    The legal basis for processing is your consent (Article 6(1)(a) GDPR) when you submit the contact form, and our legitimate interest (Article 6(1)(f) GDPR) for website analytics.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-brand-text mb-4">4. Data Retention</h2>
                <p class="text-brand-muted leading-relaxed">
                    We retain your personal data for as long as necessary to fulfill the purposes for which it was collected, typically no longer than 24 months after your last interaction with us. Server logs are retained for a maximum of 12 months.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-brand-text mb-4">5. Your Rights Under GDPR</h2>
                <p class="text-brand-muted leading-relaxed">
                    Under the General Data Protection Regulation (GDPR), you have the following rights:
                </p>
                <ul class="list-disc list-inside text-brand-muted space-y-2 mt-2">
                    <li><strong class="text-brand-text">Right of access</strong> — You can request a copy of your personal data</li>
                    <li><strong class="text-brand-text">Right to rectification</strong> — You can request correction of inaccurate data</li>
                    <li><strong class="text-brand-text">Right to erasure</strong> — You can request deletion of your personal data</li>
                    <li><strong class="text-brand-text">Right to restrict processing</strong> — You can request limitation of processing</li>
                    <li><strong class="text-brand-text">Right to data portability</strong> — You can request your data in a machine-readable format</li>
                    <li><strong class="text-brand-text">Right to object</strong> — You can object to processing based on legitimate interest</li>
                    <li><strong class="text-brand-text">Right to withdraw consent</strong> — You can withdraw consent at any time</li>
                </ul>
                <p class="text-brand-muted leading-relaxed mt-4">
                    To exercise any of these rights, please contact us at <a href="mailto:privacy@amtc.tv" class="text-brand-accent hover:text-brand-accent2">privacy@amtc.tv</a>.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-brand-text mb-4">6. Data Sharing</h2>
                <p class="text-brand-muted leading-relaxed">
                    We do not sell your personal data. We may share your data with trusted service providers who assist us in operating our website and services, subject to appropriate data processing agreements. We may also disclose data when required by law.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-brand-text mb-4">7. Cookies and Tracking</h2>
                <p class="text-brand-muted leading-relaxed">
                    Our website may use cookies and tracking technologies (Google Tag Manager, Google Analytics, Hotjar) to analyze website usage and improve our services. You can control cookie preferences through your browser settings.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-brand-text mb-4">8. Supervisory Authority</h2>
                <p class="text-brand-muted leading-relaxed">
                    If you believe your data protection rights have been violated, you have the right to lodge a complaint with the Belgian Data Protection Authority (Gegevensbeschermingsautoriteit):<br>
                    <a href="https://www.dataprotectionauthority.be" class="text-brand-accent hover:text-brand-accent2" target="_blank" rel="noopener">www.dataprotectionauthority.be</a>
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-brand-text mb-4">9. Contact</h2>
                <p class="text-brand-muted leading-relaxed">
                    For any questions about this privacy policy or our data practices, please contact:<br>
                    <strong class="text-brand-text">Amtecco</strong><br>
                    Email: <a href="mailto:privacy@amtc.tv" class="text-brand-accent hover:text-brand-accent2">privacy@amtc.tv</a>
                </p>
            </section>
        </div>
    </div>
</div>
@endsection
