<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#e5edef">
        <meta name="description" content="Rakan Osama — PHP and Laravel full-stack developer in Cairo, Egypt.">
        <meta name="application-name" content="Rakan Osama">
        <link rel="icon" href="{{ asset('favicon.svg') }}?v=2" type="image/svg+xml">
        <link rel="shortcut icon" href="{{ asset('favicon.svg') }}?v=2">
        <title>@yield('title', 'Rakan Osama — Full-stack Developer')</title>
        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-cream text-ink antialiased" data-page="@yield('page', 'portfolio')">
        <a class="skip-link" href="#main-content">Skip to content</a>
        <div class="page-loader" data-loader aria-hidden="true">
            <div class="page-loader__mark"><span>Rakan Osama</span></div>
            <p>Building thoughtful digital systems</p><div class="page-loader__line"><span></span></div>
        </div>
        <div class="pointer-glow" data-pointer-glow aria-hidden="true"></div>

        <header class="site-header" data-header>
            <a class="brand" href="{{ route('portfolio.index') }}" aria-label="Rakan Osama homepage"><span>Rakan Osama</span></a>
            <button class="menu-toggle" type="button" data-menu-toggle aria-expanded="false" aria-controls="site-navigation"><span></span><span></span><span class="sr-only">Toggle navigation</span></button>
            <nav id="site-navigation" class="site-nav" data-navigation aria-label="Primary navigation">
                <a href="{{ route('portfolio.index') }}#work">Selected work</a>
                <a href="{{ route('portfolio.index') }}#experience">Experience</a>
                <a href="{{ route('portfolio.index') }}#contact">Contact</a>
            </nav>
            <a class="header-cta" href="mailto:{{ $portfolio['contact']['email'] }}">Let&rsquo;s talk <span>&nearr;</span></a>
        </header>

        <main id="main-content">@yield('content')</main>

        <footer class="site-footer" id="contact">
            <div class="section-shell">
                <div class="footer-kicker reveal" data-reveal>Have a project in mind?</div>
                <a class="footer-title reveal" data-reveal href="mailto:{{ $portfolio['contact']['email'] }}">Let&rsquo;s make it <em>real.</em></a>
                <div class="footer-grid reveal" data-reveal>
                    <div class="footer-contact">
                        <span class="footer-label">Connect with me</span>
                        <div class="contact-links">
                            <a href="mailto:{{ $portfolio['contact']['email'] }}" aria-label="Email Rakan Osama">
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 5.5h18v13H3zM3.8 6.3 12 13l8.2-6.7" /></svg>
                                <span><small>Email</small>{{ $portfolio['contact']['email'] }}</span>
                            </a>
                            <a href="{{ $portfolio['contact']['whatsapp'] }}" target="_blank" rel="noreferrer" aria-label="Contact Rakan Osama on WhatsApp">
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 11.7a8 8 0 0 1-11.8 7L4 20l1.3-4A8 8 0 1 1 20 11.7Z" /><path d="M9 8.5c.4 2.7 2 4.4 4.7 5.1l1.2-1.1 2 .9c-.2 1.2-1 2-2.3 2-3.8-.3-6.8-3.2-7.2-7 0-1.2.7-2 1.8-2.3l1 2Z" /></svg>
                                <span><small>WhatsApp</small>{{ $portfolio['contact']['phone'] }}</span>
                            </a>
                            <a href="{{ $portfolio['contact']['linkedin'] }}" target="_blank" rel="noreferrer" aria-label="Rakan Osama on LinkedIn">
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 9v10M5 5.8v.1M9.5 19V9m0 4.3c.7-2.7 6-3.2 6 1V19M19 19V9" /></svg>
                                <span><small>LinkedIn</small>rakan-osama</span>
                            </a>
                            <a href="{{ $portfolio['contact']['github'] }}" target="_blank" rel="noreferrer" aria-label="Rakan Osama on GitHub">
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3a9 9 0 0 0-2.8 17.5c.5.1.7-.2.7-.5v-2c-2.8.6-3.4-1.2-3.4-1.2-.5-1.1-1.1-1.4-1.1-1.4-.9-.6.1-.6.1-.6 1 0 1.6 1.1 1.6 1.1.9 1.6 2.4 1.1 2.9.8.1-.7.4-1.1.7-1.3-2.3-.3-4.7-1.1-4.7-5a3.9 3.9 0 0 1 1-2.7 3.7 3.7 0 0 1 .1-2.7s.8-.3 2.8 1a9.5 9.5 0 0 1 5.1 0c2-1.3 2.8-1 2.8-1a3.7 3.7 0 0 1 .1 2.7 3.9 3.9 0 0 1 1 2.7c0 3.9-2.4 4.7-4.7 5 .4.3.7 1 .7 1.9V20c0 .3.2.6.7.5A9 9 0 0 0 12 3Z" /></svg>
                                <span><small>GitHub</small>Rakan-osama</span>
                            </a>
                        </div>
                    </div>
                    <div class="footer-location">
                        <span class="footer-label">Based in</span><p>{{ $portfolio['profile']['location'] }}</p><p>Available for ambitious digital work.</p>
                    </div>
                </div>
                <div class="footer-bottom"><p>&copy; {{ date('Y') }} Rakan Osama</p><a href="#main-content">Back to top &uarr;</a></div>
            </div>
        </footer>
    </body>
</html>
