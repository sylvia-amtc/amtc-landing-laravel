import './bootstrap';

// UTM parameter extraction
function extractUtmParams() {
    const params = new URLSearchParams(window.location.search);
    ['utm_source', 'utm_medium', 'utm_campaign'].forEach(key => {
        const el = document.getElementById(key);
        if (el && params.get(key)) {
            el.value = params.get(key);
        }
    });
}

// Lead capture form handling
function initLeadForm() {
    const form = document.getElementById('lead-form');
    if (!form) return;

    extractUtmParams();

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const submitBtn = document.getElementById('submit-btn');
        const messageEl = document.getElementById('form-message');
        const originalText = submitBtn.textContent;

        submitBtn.disabled = true;
        submitBtn.textContent = 'Submitting...';
        messageEl.classList.add('hidden');

        const formData = new FormData(form);
        const data = {};
        formData.forEach((value, key) => {
            if (value) data[key] = value;
        });

        // Convert distribution_points to integer
        if (data.distribution_points) {
            data.distribution_points = parseInt(data.distribution_points, 10);
        }

        try {
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

            const response = await fetch('/api/leads', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken || '',
                },
                body: JSON.stringify(data),
            });

            const result = await response.json();

            if (response.ok) {
                messageEl.textContent = result.message || 'Thank you! We\'ll be in touch soon.';
                messageEl.className = 'text-center py-3 rounded-xl text-sm font-medium bg-brand-green/10 text-brand-green';
                messageEl.classList.remove('hidden');
                form.reset();
                extractUtmParams(); // Re-populate UTM after reset
            } else if (response.status === 422) {
                const errors = result.errors || {};
                const firstError = Object.values(errors)[0];
                messageEl.textContent = Array.isArray(firstError) ? firstError[0] : (result.message || 'Please check your input.');
                messageEl.className = 'text-center py-3 rounded-xl text-sm font-medium bg-red-400/10 text-red-400';
                messageEl.classList.remove('hidden');
            } else {
                throw new Error(result.message || 'Something went wrong');
            }
        } catch (err) {
            messageEl.textContent = err.message || 'Something went wrong. Please try again.';
            messageEl.className = 'text-center py-3 rounded-xl text-sm font-medium bg-red-400/10 text-red-400';
            messageEl.classList.remove('hidden');
        } finally {
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
        }
    });
}

document.addEventListener('DOMContentLoaded', initLeadForm);
