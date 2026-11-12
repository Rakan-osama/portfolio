import '../css/app.css';
import { imagePath, portfolio } from './portfolio-data.js';

const projectUrl = (project) => `/projects/${project.slug}`;
const image = (name, alt, options = {}) => {
    const loading = options.eager ? 'eager' : 'lazy';
    const priority = options.eager ? ' fetchpriority="high"' : '';

    return `<img src="${imagePath(name)}" srcset="${imagePath(name, 640)} 640w, ${imagePath(name)} 1280w" sizes="${options.sizes ?? '(max-width: 820px) 90vw, 50vw'}" alt="${alt}" width="1280" height="720" loading="${loading}" decoding="async"${priority}>`;
};

const socialLinks = () => `
    <div class="hero-socials" data-hero-reveal aria-label="Contact links">
        <a href="mailto:${portfolio.contact.email}" aria-label="Email Rakan Osama" title="Email"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 5.5h18v13H3zM3.8 6.3 12 13l8.2-6.7" /></svg></a>
        <a href="${portfolio.contact.whatsapp}" target="_blank" rel="noreferrer" aria-label="WhatsApp Rakan Osama" title="WhatsApp"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 11.7a8 8 0 0 1-11.8 7L4 20l1.3-4A8 8 0 1 1 20 11.7Z" /><path d="M9 8.5c.4 2.7 2 4.4 4.7 5.1l1.2-1.1 2 .9c-.2 1.2-1 2-2.3 2-3.8-.3-6.8-3.2-7.2-7 0-1.2.7-2 1.8-2.3l1 2Z" /></svg></a>
        <a href="${portfolio.contact.linkedin}" target="_blank" rel="noreferrer" aria-label="Rakan Osama on LinkedIn" title="LinkedIn"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 9v10M5 5.8v.1M9.5 19V9m0 4.3c.7-2.7 6-3.2 6 1V19M19 19V9" /></svg></a>
        <a href="${portfolio.contact.github}" target="_blank" rel="noreferrer" aria-label="Rakan Osama on GitHub" title="GitHub"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3a9 9 0 0 0-2.8 17.5c.5.1.7-.2.7-.5v-2c-2.8.6-3.4-1.2-3.4-1.2-.5-1.1-1.1-1.4-1.1-1.4-.9-.6.1-.6.1-.6 1 0 1.6 1.1 1.6 1.1.9 1.6 2.4 1.1 2.9.8.1-.7.4-1.1.7-1.3-2.3-.3-4.7-1.1-4.7-5a3.9 3.9 0 0 1 1-2.7 3.7 3.7 0 0 1 .1-2.7s.8-.3 2.8 1a9.5 9.5 0 0 1 5.1 0c2-1.3 2.8-1 2.8-1a3.7 3.7 0 0 1 .1 2.7 3.9 3.9 0 0 1 1 2.7c0 3.9-2.4 4.7-4.7 5 .4.3.7 1 .7 1.9V20c0 .3.2.6.7.5A9 9 0 0 0 12 3Z" /></svg></a>
    </div>`;

const header = (project = null, isProjectPage = false) => `
    <a class="skip-link" href="#main-content">Skip to content</a>
    <div class="page-loader" data-loader aria-hidden="true"><div class="page-loader__mark"><span>Rakan Osama</span></div><p>Building thoughtful digital systems</p><div class="page-loader__line"><span></span></div></div>
    <div class="pointer-glow" data-pointer-glow aria-hidden="true"></div>
    <header class="site-header" data-header>
        <a class="brand" href="/" aria-label="Rakan Osama homepage"><span>Rakan Osama</span></a>
        <button class="menu-toggle" type="button" data-menu-toggle aria-expanded="false" aria-controls="site-navigation"><span></span><span></span><span class="sr-only">Toggle navigation</span></button>
        <nav id="site-navigation" class="site-nav" data-navigation aria-label="Primary navigation">${isProjectPage ? '<a href="/">Home</a>' : ''}<a href="/#work">Selected work</a><a href="/#experience">Experience</a><a href="#contact">Contact</a></nav>
        ${project?.liveUrl ? `<a class="header-cta" href="${project.liveUrl}" target="_blank" rel="noreferrer">Visit live site <span>&nearr;</span></a>` : `<a class="header-cta" href="mailto:${portfolio.contact.email}">Let&rsquo;s talk <span>&nearr;</span></a>`}
    </header>`;

const footer = () => `
    <footer class="site-footer" id="contact"><div class="section-shell">
        <div class="footer-kicker reveal" data-reveal>Have a project in mind?</div>
        <a class="footer-title reveal" data-reveal href="mailto:${portfolio.contact.email}">Let&rsquo;s make it <em>real.</em></a>
        <div class="footer-grid reveal" data-reveal><div class="footer-contact"><span class="footer-label">Connect with me</span><div class="contact-links">
            <a href="mailto:${portfolio.contact.email}" aria-label="Email Rakan Osama"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 5.5h18v13H3zM3.8 6.3 12 13l8.2-6.7" /></svg><span><small>Email</small>${portfolio.contact.email}</span></a>
            <a href="${portfolio.contact.whatsapp}" target="_blank" rel="noreferrer" aria-label="Contact Rakan Osama on WhatsApp"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 11.7a8 8 0 0 1-11.8 7L4 20l1.3-4A8 8 0 1 1 20 11.7Z" /><path d="M9 8.5c.4 2.7 2 4.4 4.7 5.1l1.2-1.1 2 .9c-.2 1.2-1 2-2.3 2-3.8-.3-6.8-3.2-7.2-7 0-1.2.7-2 1.8-2.3l1 2Z" /></svg><span><small>WhatsApp</small>${portfolio.contact.phone}</span></a>
            <a href="${portfolio.contact.linkedin}" target="_blank" rel="noreferrer" aria-label="Rakan Osama on LinkedIn"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 9v10M5 5.8v.1M9.5 19V9m0 4.3c.7-2.7 6-3.2 6 1V19M19 19V9" /></svg><span><small>LinkedIn</small>rakan-osama</span></a>
            <a href="${portfolio.contact.github}" target="_blank" rel="noreferrer" aria-label="Rakan Osama on GitHub"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3a9 9 0 0 0-2.8 17.5c.5.1.7-.2.7-.5v-2c-2.8.6-3.4-1.2-3.4-1.2-.5-1.1-1.1-1.4-1.1-1.4-.9-.6.1-.6.1-.6 1 0 1.6 1.1 1.6 1.1.9 1.6 2.4 1.1 2.9.8.1-.7.4-1.1.7-1.3-2.3-.3-4.7-1.1-4.7-5a3.9 3.9 0 0 1 1-2.7 3.7 3.7 0 0 1 .1-2.7s.8-.3 2.8 1a9.5 9.5 0 0 1 5.1 0c2-1.3 2.8-1 2.8-1a3.7 3.7 0 0 1 .1 2.7 3.9 3.9 0 0 1 1 2.7c0 3.9-2.4 4.7-4.7 5 .4.3.7 1 .7 1.9V20c0 .3.2.6.7.5A9 9 0 0 0 12 3Z" /></svg><span><small>GitHub</small>Rakan-osama</span></a>
        </div></div></div>
        <div class="footer-bottom"><span>&copy; ${new Date().getFullYear()} Rakan Osama</span><a href="#main-content">Back to top &uarr;</a></div>
    </div></footer>`;

const projectCards = () => portfolio.projects.map((project, index) => `
    <article class="project-card project-card--${project.accent} reveal" data-reveal>
        <a class="project-card__visual" href="${projectUrl(project)}" aria-label="View ${project.name} case study"><div class="project-browser"><div class="project-browser__bar"><i></i><i></i><i></i><span>${project.name}</span></div><div class="project-browser__canvas">${image(project.images[0], `${project.name} project preview`)}</div></div><span class="project-view">View case study &nearr;</span></a>
        <div class="project-card__meta"><div class="project-card__topline"><span>${String(index + 1).padStart(2, '0')}</span><time>${project.period}</time></div><div class="project-status"><i></i>${project.status}</div><h3><a href="${projectUrl(project)}">${project.name}</a></h3><p>${project.summary}</p><ul>${project.services.map((service) => `<li>${service}</li>`).join('')}</ul><div class="project-links"><a href="${projectUrl(project)}">Case study <span>&rarr;</span></a>${project.liveUrl ? `<a class="project-links__live" href="${project.liveUrl}" target="_blank" rel="noreferrer">Live production site <span>&nearr;</span></a>` : '<span class="project-links__pending">Production link coming soon</span>'}</div></div>
    </article>`).join('');

const homepage = () => `
    <section class="hero section-shell" aria-labelledby="hero-title"><div class="hero-copy"><div class="hero-eyebrow" data-hero-reveal><span class="availability-dot"></span>Available for meaningful work</div><p class="hero-intro" data-hero-reveal>Hi, I&rsquo;m</p><h1 id="hero-title" class="hero-title" data-hero-reveal aria-label="Rakan Osama"><span data-split-text>Rakan</span><span class="hero-title__accent" data-split-text>Osama.</span></h1><div class="hero-role" data-hero-reveal><strong>${portfolio.profile.role}</strong><i></i><span>${portfolio.profile.location}</span></div><p class="hero-summary" data-hero-reveal>${portfolio.profile.intro}</p><div class="hero-actions" data-hero-reveal><a class="button button--primary magnetic" href="#work">Explore my work <span>&darr;</span></a><a class="button button--contact magnetic" href="#contact">Contact me <span>&nearr;</span></a></div>${socialLinks()}</div>
        <div class="hero-visual" data-hero-reveal data-parallax-zone><div class="hero-orbit hero-orbit--outer"></div><div class="hero-orbit hero-orbit--inner"></div><div class="hero-stamp" aria-hidden="true"><svg viewBox="0 0 120 120" role="img"><defs><path id="stamp-path" d="M60,60 m-42,0 a42,42 0 1,1 84,0 a42,42 0 1,1 -84,0" /></defs><text><textPath href="#stamp-path">DESIGNING &middot; BUILDING &middot; REFINING &middot; </textPath></text></svg><span>&#10022;</span></div><div class="portrait-frame" data-parallax-item><div class="portrait-shape"></div><img src="${portfolio.profile.portrait}" alt="Rakan Osama wearing a grey suit" width="512" height="512" fetchpriority="high"><span class="portrait-label portrait-label--one">Laravel specialist</span><span class="portrait-label portrait-label--two">Systems + interfaces</span></div><div class="hero-code-card" aria-hidden="true"><span>01</span><code>ideas &rarr; systems</code></div></div>
    </section>
    <section class="tech-marquee" aria-label="Technologies"><div class="marquee-track">${[...portfolio.technologies, ...portfolio.technologies].map((technology) => `<span>${technology} <i>&#10022;</i></span>`).join('')}</div></section>
    <div class="section-transition" aria-hidden="true"><span></span><i></i></div>
    <section class="work section-shell section-pad" id="work"><div class="section-heading section-heading--row reveal" data-reveal><div><span class="section-index">01 / Selected work</span><h2>Built to work.<br><em>Designed to stay.</em></h2></div><p>A selection of products shaped across backend architecture, business workflows, and client-facing experiences.</p></div><div class="project-list">${projectCards()}</div></section>
    <div class="section-transition section-transition--cool" aria-hidden="true"><span></span><i></i></div>
    <section class="gallery section-pad" aria-labelledby="gallery-title"><div class="section-shell gallery-heading reveal" data-reveal><span class="section-index">02 / Work in motion</span><h2 id="gallery-title">A growing archive<br>of <em>digital work.</em></h2><p>A moving reel of interfaces from production websites, dashboards, and business systems.</p></div><div class="gallery-marquee" aria-label="Project previews"><div class="gallery-track">${[...portfolio.projects, ...portfolio.projects].map((project, index) => `<a class="gallery-tile gallery-tile--${project.accent}" href="${projectUrl(project)}" ${index >= portfolio.projects.length ? 'aria-hidden="true" tabindex="-1"' : ''}>${image(project.images[0], '', { sizes: '(max-width: 540px) 72vw, 25vw' })}<span class="gallery-tile__index">${String((index % portfolio.projects.length) + 1).padStart(2, '0')}</span><span>${project.name}</span></a>`).join('')}</div></div></section>
    <div class="section-transition section-transition--slate" aria-hidden="true"><span></span><i></i></div>
    <section class="experience section-pad" id="experience"><div class="section-shell"><div class="section-heading section-heading--row reveal" data-reveal><div><span class="section-index">03 / Experience</span><h2>Where craft met<br><em>real work.</em></h2></div><p>From responsive interfaces to complex SaaS modules, each role sharpened a different part of my full-stack practice.</p></div><div class="timeline" aria-label="Career history from earliest role to present">${[...portfolio.experience].reverse().map((experience, index) => `<article class="timeline-item reveal" data-reveal><div class="timeline-card__top"><span class="timeline-number">0${index + 1}</span><time>${experience.period}</time></div><div class="timeline-role"><div class="company-logo"><img src="${experience.logo}" alt="${experience.company} logo" width="96" height="96" loading="lazy">${experience.period.includes('Present') ? '</div><span class="present-tag"><i></i>Present workplace</span>' : '</div>'}<h3>${experience.role}</h3><p>${experience.company} &middot; ${experience.location}</p></div><p class="timeline-description">${experience.description}</p></article>`).join('')}</div><div class="education-card reveal" data-reveal><div class="education-logo"><img src="${portfolio.education.logo}" alt="${portfolio.education.school} logo" width="96" height="96" loading="lazy"></div><div><span>Education</span><h3>${portfolio.education.degree}</h3><p>${portfolio.education.school}</p></div><time>${portfolio.education.period}</time></div></div></section>
    <div class="section-transition" aria-hidden="true"><span></span><i></i></div><section class="closing-note section-shell section-pad"><div class="closing-note__mark reveal" data-reveal>&#10022;</div><p class="reveal" data-reveal>I care about the details users notice<br>and the architecture they never have to.</p></section>`;

const projectPage = (project) => {
    const projectIndex = portfolio.projects.indexOf(project);
    const nextProject = portfolio.projects[(projectIndex + 1) % portfolio.projects.length];

    return `<section class="project-hero section-shell"><a class="project-back" href="/#work">&larr; Back to selected work</a><div class="project-hero__grid"><div><span class="project-hero__eyebrow">${project.client} &middot; ${project.status}</span><h1>${project.name}</h1><p>${project.summary}</p><div class="project-hero__actions">${project.liveUrl ? `<a class="button button--contact" href="${project.liveUrl}" target="_blank" rel="noreferrer">Open live site <span>&nearr;</span></a>` : '<span class="project-progress"><i></i> Product currently in progress</span>'}</div></div><div class="project-hero__meta"><div><span>Timeline</span><strong>${project.period}</strong></div><div><span>My contribution</span><strong>${project.services.join(' &middot; ')}</strong></div></div></div></section>
        <section class="project-showcase project-card--${project.accent}"><div class="project-showcase__frame reveal" data-reveal><div class="project-browser project-browser--large"><div class="project-browser__bar"><i></i><i></i><i></i><span>${project.name}</span></div><div class="project-browser__canvas">${image(project.images[0], `${project.name} interface`, { eager: true, sizes: '90vw' })}</div></div><p>Production interface</p></div></section>
        <section class="project-overview section-shell section-pad"><div class="project-overview__heading reveal" data-reveal><span class="section-index">Project overview</span><h2>From requirements<br>to a working <em>system.</em></h2></div><div class="project-overview__body reveal" data-reveal><p>${project.description}</p><div class="project-services">${project.services.map((service, index) => `<span><i>${String(index + 1).padStart(2, '0')}</i>${service}</span>`).join('')}</div></div></section>
        <section class="project-gallery section-shell" aria-label="${project.name} screenshots">${project.images.slice(1).map((projectImage, index) => `<figure class="project-gallery__item ${index === 0 ? 'project-gallery__item--wide' : ''} reveal" data-reveal>${image(projectImage, `${project.name} interface screenshot ${index + 2}`, { sizes: index === 0 ? '90vw' : '(max-width: 820px) 90vw, 45vw' })}</figure>`).join('')}</section>
        <section class="next-project section-pad"><a class="section-shell" href="${projectUrl(nextProject)}"><span>Next project</span><h2>${nextProject.name}</h2><i>&nearr;</i></a></section>`;
};

const path = window.location.pathname.replace(/\/$/, '') || '/';
const selectedProject = portfolio.projects.find((project) => path === projectUrl(project));
const isProjectPath = path.startsWith('/projects/');

document.body.dataset.page = selectedProject ? 'project' : 'portfolio';
document.title = selectedProject ? `${selectedProject.name} — Rakan Osama` : 'Rakan Osama — Full-stack Developer';
document.querySelector('#app').innerHTML = `${header(selectedProject, isProjectPath)}<main id="main-content">${selectedProject ? projectPage(selectedProject) : isProjectPath ? '<section class="project-hero section-shell"><h1>Project not found</h1><a class="button button--primary" href="/">Return home</a></section>' : homepage()}</main>${footer()}`;

await import('./app.js');
