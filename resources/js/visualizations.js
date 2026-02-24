import { renderSRTDistribution } from './visualizations/srt-distribution.js';
import { renderCDNDelivery } from './visualizations/cdn-delivery.js';
import { renderGlobe } from './visualizations/globe-viz.js';

// Initialize visualizations when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    // Globe visualization (hero section)
    const globeContainers = document.querySelectorAll('[id^="globe-viz-"]');
    globeContainers.forEach(container => {
        renderGlobe(container);
    });

    // SRT visualization containers (bento grid + any standalone)
    const srtContainers = document.querySelectorAll('.srt-visualization, #srt-viz');
    srtContainers.forEach(container => {
        fetch('/api/visualizations/srt')
            .then(res => res.json())
            .then(data => renderSRTDistribution(container, data))
            .catch(err => console.error('Failed to load SRT visualization:', err));
    });

    // CDN visualization containers (bento grid + any standalone)
    const cdnContainers = document.querySelectorAll('.cdn-visualization, #cdn-viz');
    cdnContainers.forEach(container => {
        fetch('/api/visualizations/cdn')
            .then(res => res.json())
            .then(data => renderCDNDelivery(container, data))
            .catch(err => console.error('Failed to load CDN visualization:', err));
    });
});
