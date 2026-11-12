const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const loader = document.querySelector('[data-loader]');
const header = document.querySelector('[data-header]');
const menuToggle = document.querySelector('[data-menu-toggle]');
const navigation = document.querySelector('[data-navigation]');

const finishLoading = () => {
    loader?.classList.add('is-finished');
    document.body.classList.add('is-ready');
};

if (document.readyState === 'complete') {
    window.setTimeout(finishLoading, reducedMotion ? 0 : 450);
} else {
    window.addEventListener('load', () => window.setTimeout(finishLoading, reducedMotion ? 0 : 450), { once: true });
}

window.setTimeout(finishLoading, 2400);

document.querySelectorAll('[data-split-text]').forEach((element) => {
    const text = element.textContent;

    element.textContent = '';
    element.setAttribute('aria-hidden', 'true');

    Array.from(text).forEach((character, index) => {
        const letter = document.createElement('span');

        letter.dataset.letter = '';
        letter.style.transitionDelay = `${index * 18}ms`;
        letter.textContent = character === ' ' ? '\u00a0' : character;
        element.append(letter);
    });
});

const revealElements = document.querySelectorAll('[data-reveal]');

if (reducedMotion || !('IntersectionObserver' in window)) {
    revealElements.forEach((element) => element.classList.add('is-visible'));
} else {
    const revealObserver = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            });
        },
        { rootMargin: '0px 0px -10% 0px', threshold: 0.12 },
    );

    revealElements.forEach((element) => revealObserver.observe(element));
}

const updateHeader = () => {
    header?.classList.toggle('is-scrolled', window.scrollY > 30);
};

updateHeader();
window.addEventListener('scroll', updateHeader, { passive: true });

const closeNavigation = () => {
    menuToggle?.setAttribute('aria-expanded', 'false');
    navigation?.classList.remove('is-open');
    document.body.style.overflow = '';
};

menuToggle?.addEventListener('click', () => {
    const willOpen = menuToggle.getAttribute('aria-expanded') !== 'true';

    menuToggle.setAttribute('aria-expanded', String(willOpen));
    navigation?.classList.toggle('is-open', willOpen);
    document.body.style.overflow = willOpen ? 'hidden' : '';
});

navigation?.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeNavigation));

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        closeNavigation();
    }
});

if (!reducedMotion && window.matchMedia('(pointer: fine)').matches) {
    const pointerGlow = document.querySelector('[data-pointer-glow]');
    let pointerFrame;

    window.addEventListener('pointermove', (event) => {
        window.cancelAnimationFrame(pointerFrame);
        pointerFrame = window.requestAnimationFrame(() => {
            pointerGlow?.style.setProperty('--pointer-x', `${event.clientX}px`);
            pointerGlow?.style.setProperty('--pointer-y', `${event.clientY}px`);
        });
    });

    document.querySelectorAll('[data-parallax-zone]').forEach((zone) => {
        const parallaxItem = zone.querySelector('[data-parallax-item]');

        zone.addEventListener('pointermove', (event) => {
            const bounds = zone.getBoundingClientRect();
            const x = ((event.clientX - bounds.left) / bounds.width - 0.5) * 18;
            const y = ((event.clientY - bounds.top) / bounds.height - 0.5) * 18;

            parallaxItem?.style.setProperty('--parallax-x', `${x}px`);
            parallaxItem?.style.setProperty('--parallax-y', `${y}px`);
        });

        zone.addEventListener('pointerleave', () => {
            parallaxItem?.style.setProperty('--parallax-x', '0px');
            parallaxItem?.style.setProperty('--parallax-y', '0px');
        });
    });

    document.querySelectorAll('.magnetic').forEach((element) => {
        element.addEventListener('pointermove', (event) => {
            const bounds = element.getBoundingClientRect();
            const x = (event.clientX - bounds.left - bounds.width / 2) * 0.12;
            const y = (event.clientY - bounds.top - bounds.height / 2) * 0.12;

            element.style.transform = `translate3d(${x}px, ${y}px, 0)`;
        });

        element.addEventListener('pointerleave', () => {
            element.style.transform = '';
        });
    });
}
