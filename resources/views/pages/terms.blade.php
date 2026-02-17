@extends('layouts.app')

@section('title', 'Terms of Service | Amtecco')
@section('meta_description', 'Terms of service for Amtecco - conditions governing the use of our media workflow platform.')

@section('content')
<div class="min-h-screen bg-brand-bg">
    <div class="max-w-3xl mx-auto px-4 py-16 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-brand-text mb-8">Terms of Service</h1>
        <p class="text-brand-muted mb-8">Last updated: February 2026</p>

        <div class="prose prose-invert max-w-none space-y-8 text-brand-text">
            <section>
                <h2 class="text-2xl font-semibold text-brand-text mb-4">1. About Amtecco</h2>
                <p class="text-brand-muted leading-relaxed">
                    These Terms of Service ("Terms") govern your use of the services provided by
                    <strong class="text-brand-text">Amtecco</strong>, a company registered in Belgium
                    (VAT: BE0748.398.550), operating the amtc.tv platform and related media workflow services.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-brand-text mb-4">2. Service Description</h2>
                <p class="text-brand-muted leading-relaxed">
                    Amtecco provides a media workflow automation platform that helps broadcasters and media companies
                    streamline their content operations, including but not limited to: media asset management,
                    automated transcoding, content distribution, and workflow orchestration tools.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-brand-text mb-4">3. Acceptance of Terms</h2>
                <p class="text-brand-muted leading-relaxed">
                    By accessing or using our services, you agree to be bound by these Terms. If you do not agree
                    to these Terms, you may not access or use the services. If you are using the services on behalf
                    of an organization, you represent that you have authority to bind that organization to these Terms.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-brand-text mb-4">4. Acceptable Use</h2>
                <p class="text-brand-muted leading-relaxed">You agree not to:</p>
                <ul class="list-disc list-inside text-brand-muted space-y-2 mt-2">
                    <li>Use the services for any unlawful purpose or in violation of applicable laws</li>
                    <li>Upload or distribute content that infringes on intellectual property rights</li>
                    <li>Attempt to gain unauthorized access to any part of the services or related systems</li>
                    <li>Interfere with or disrupt the integrity or performance of the services</li>
                    <li>Reverse-engineer, decompile, or disassemble any aspect of the services</li>
                    <li>Use the services to transmit malicious code or harmful content</li>
                </ul>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-brand-text mb-4">5. Intellectual Property</h2>
                <p class="text-brand-muted leading-relaxed">
                    All intellectual property rights in the services, including software, designs, and documentation,
                    are owned by Amtecco or its licensors. You retain ownership of content you upload to the platform.
                    By uploading content, you grant Amtecco a limited license to process and store that content
                    solely to provide the services.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-brand-text mb-4">6. Limitation of Liability</h2>
                <p class="text-brand-muted leading-relaxed">
                    To the maximum extent permitted by applicable law, Amtecco shall not be liable for any indirect,
                    incidental, special, consequential, or punitive damages, or any loss of profits or revenue,
                    whether incurred directly or indirectly, or any loss of data, use, goodwill, or other intangible
                    losses, resulting from your access to or use of the services.
                </p>
                <p class="text-brand-muted leading-relaxed mt-2">
                    In no event shall Amtecco's aggregate liability exceed the amount you paid to Amtecco in the
                    twelve (12) months preceding the event giving rise to the claim.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-brand-text mb-4">7. Termination</h2>
                <p class="text-brand-muted leading-relaxed">
                    Either party may terminate these Terms at any time with thirty (30) days' written notice.
                    Amtecco may suspend or terminate your access immediately if you breach these Terms.
                    Upon termination, your right to use the services ceases, and Amtecco may delete your data
                    after a reasonable retention period.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-brand-text mb-4">8. Governing Law and Jurisdiction</h2>
                <p class="text-brand-muted leading-relaxed">
                    These Terms shall be governed by and construed in accordance with the laws of Belgium,
                    without regard to its conflict of law provisions. Any disputes arising under or in connection
                    with these Terms shall be subject to the exclusive jurisdiction of the courts of Belgium.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-brand-text mb-4">9. Changes to These Terms</h2>
                <p class="text-brand-muted leading-relaxed">
                    Amtecco reserves the right to modify these Terms at any time. We will notify users of any
                    material changes by updating the "Last updated" date. Your continued use of the services
                    after any changes constitutes acceptance of the new Terms.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-brand-text mb-4">10. Contact</h2>
                <p class="text-brand-muted leading-relaxed">
                    For questions about these Terms of Service, please contact us at:<br>
                    <a href="mailto:legal@amtc.tv" class="text-brand-accent hover:text-brand-accent2">legal@amtc.tv</a>
                </p>
            </section>
        </div>
    </div>
</div>
@endsection
