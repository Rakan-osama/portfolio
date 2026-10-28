/**
 * Open or close the full-screen navigation overlay.
 */
const header = document.getElementById('site-header');
const overlay = document.getElementById('menu-overlay');
const openButton = document.getElementById('menu-open');
const closeButton = document.getElementById('menu-close');

const setMenu = (isOpen) => {
    if (!overlay) {
        return;
    }

    overlay.classList.toggle('is-open', isOpen);
    overlay.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
    openButton?.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    document.documentElement.classList.toggle('overflow-hidden', isOpen);

    if (isOpen) {
        closeButton?.focus();
    } else {
        openButton?.focus({ preventScroll: true });
    }
};

openButton?.addEventListener('click', () => setMenu(true));
closeButton?.addEventListener('click', () => setMenu(false));

document.querySelectorAll('[data-menu-link]').forEach((link) => {
    link.addEventListener('click', () => setMenu(false));
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && overlay?.classList.contains('is-open')) {
        setMenu(false);
    }
});

/**
 * Frost the fixed header once the hero starts scrolling away.
 */
const updateHeader = () => {
    header?.classList.toggle('is-scrolled', window.scrollY > 24);
};

updateHeader();
window.addEventListener('scroll', updateHeader, { passive: true });

/**
 * Reveal every block as it scrolls into view.
 *
 * Elements are staggered by their position inside the same parent, so a row of
 * cards arrives one after another instead of all at once. Add `data-delay` to
 * override the computed delay in milliseconds.
 */
const revealItems = [...document.querySelectorAll('.reveal')];

if (revealItems.length > 0 && 'IntersectionObserver' in window) {
    const groups = new Map();

    revealItems.forEach((element) => {
        const siblings = groups.get(element.parentElement) ?? [];
        siblings.push(element);
        groups.set(element.parentElement, siblings);
    });

    const delayFor = (element) => {
        if (element.dataset.delay !== undefined) {
            return Number(element.dataset.delay);
        }

        const siblings = groups.get(element.parentElement) ?? [];
        const index = siblings.indexOf(element);

        return Math.min(index, 5) * 110;
    };

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.style.transitionDelay = `${delayFor(entry.target)}ms`;
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            });
        },
        { threshold: 0.12, rootMargin: '0px 0px -8% 0px' },
    );

    revealItems.forEach((element) => {
        element.classList.add('reveal-pending');
        observer.observe(element);
    });
}
