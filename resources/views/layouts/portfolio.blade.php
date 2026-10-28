<!DOCTYPE html>
<html lang="en" :class="{'dark':dark}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ config('portfolio.name') }} — {{ config('portfolio.title') }}. Scalable web backends, RESTful APIs and database design built with Laravel.">
    <meta name="keywords" content="backend developer, laravel, php, mysql, RESTful API, portfolio, {{ config('portfolio.location') }}">
    <meta name="author" content="{{ config('portfolio.name') }}">
    <meta property="og:title" content="{{ config('portfolio.name') }} — {{ config('portfolio.title') }}">
    <meta property="og:description" content="I build scalable web backends and RESTful APIs with PHP, Laravel and MySQL.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('home') }}">

    <title>{{ config('portfolio.name') }} — {{ config('portfolio.title') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&display=swap" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body x-data="portfolio()" :class="{'dark':dark}"
      class="bg-white dark:bg-zinc-950 text-zinc-900 dark:text-zinc-100 antialiased relative">

    @include('portfolio.partials.nav')

    @yield('content')

    @include('portfolio.partials.footer')

    <script>
        function portfolio() {
            return {
                dark: false,
                mm: false,
                sc: false,
                s: 'hero',

                init() {
                    // dark mode
                    this.dark = localStorage.getItem('theme') === 'dark' ||
                        (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches);
                    this.$watch('dark', v => localStorage.setItem('theme', v ? 'dark' : 'light'));

                    // scroll
                    window.addEventListener('scroll', () => {
                        this.sc = window.scrollY > 20;
                        this.updateSection();
                    }, { passive: true });
                    this.sc = window.scrollY > 20;
                    this.updateSection();

                    // reveal
                    const io = new IntersectionObserver(entries => {
                        entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
                    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
                    document.querySelectorAll('.reveal').forEach(el => io.observe(el));
                },

                updateSection() {
                    const atBottom = (window.innerHeight + window.scrollY) >= document.body.scrollHeight - 60;
                    if (atBottom) { this.s = 'contact'; return; }
                    const ids = ['contact', 'experience', 'about', 'projects', 'expertise', 'hero'];
                    for (const id of ids) {
                        const el = document.getElementById(id);
                        if (el && window.scrollY >= el.offsetTop - 130) { this.s = id; return; }
                    }
                    this.s = 'hero';
                }
            }
        }
    </script>
</body>
</html>
