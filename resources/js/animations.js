import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

/**
 * Initialize all scroll-based animations
 */
export function initScrollAnimations() {
    // Fade in elements on scroll
    gsap.utils.toArray('.animate-on-scroll').forEach(el => {
        gsap.from(el, {
            y: 60,
            opacity: 0,
            duration: 0.8,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: el,
                start: 'top 85%',
                toggleActions: 'play none none reverse'
            }
        });
    });

    // Stagger children animations for grids
    gsap.utils.toArray('.stagger-children').forEach(parent => {
        gsap.from(parent.children, {
            y: 40,
            opacity: 0,
            duration: 0.6,
            stagger: 0.1,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: parent,
                start: 'top 80%'
            }
        });
    });

    // Animated number counters
    gsap.utils.toArray('.animate-number').forEach(el => {
        const target = parseInt(el.getAttribute('data-target'));
        const prefix = el.textContent.match(/^[^\d]*/)[0];
        const suffix = el.textContent.match(/[^\d]*$/)[0];

        gsap.from(el, {
            textContent: 0,
            duration: 2,
            ease: 'power1.out',
            snap: { textContent: 1 },
            scrollTrigger: {
                trigger: el,
                start: 'top 80%',
                once: true
            },
            onUpdate: function() {
                el.textContent = prefix + Math.ceil(this.targets()[0].textContent) + suffix;
            }
        });
    });
}

/**
 * Initialize hero animations
 */
export function initHeroAnimations() {
    const hero = document.querySelector('.hero-section');
    if (!hero) return;

    // Fade in hero content
    gsap.from('.hero-content > *', {
        y: 30,
        opacity: 0,
        duration: 0.8,
        stagger: 0.2,
        ease: 'power3.out',
        delay: 0.3
    });

    // Float animation for globe
    const globe = document.querySelector('.globe-container');
    if (globe) {
        gsap.to(globe, {
            y: -10,
            duration: 2,
            yoyo: true,
            repeat: -1,
            ease: 'sine.inOut'
        });
    }
}

/**
 * Initialize card hover effects
 */
export function initCardAnimations() {
    const cards = document.querySelectorAll('.card-hover');

    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            gsap.to(card, {
                y: -8,
                scale: 1.02,
                duration: 0.3,
                ease: 'power2.out'
            });
        });

        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                y: 0,
                scale: 1,
                duration: 0.3,
                ease: 'power2.out'
            });
        });
    });
}

/**
 * Main initialization function
 */
export function initAnimations() {
    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => {
            initScrollAnimations();
            initHeroAnimations();
            initCardAnimations();
        });
    } else {
        initScrollAnimations();
        initHeroAnimations();
        initCardAnimations();
    }
}
