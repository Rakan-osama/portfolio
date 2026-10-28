@php
    $links = [
        ['label' => 'Home', 'href' => '#home'],
        ['label' => 'About', 'href' => '#about'],
        ['label' => 'Experience', 'href' => '#experience'],
        ['label' => 'Work', 'href' => '#work'],
        ['label' => 'Process', 'href' => '#process'],
        ['label' => 'Contact', 'href' => '#contact'],
    ];
@endphp

<header id="site-header" class="site-header fixed inset-x-0 top-0 z-50">
    <div class="mx-auto flex max-w-[1320px] items-center justify-between px-6 py-5 md:px-10 md:py-6">
        <a href="#home" class="font-serif text-[1.6rem] italic leading-none tracking-tight md:text-[1.8rem]">
            {{ $portfolio['name'] }}
        </a>

        <button
            id="menu-open"
            type="button"
            class="flex h-12 w-12 items-center justify-center rounded-full border border-white/70 bg-white/70 backdrop-blur-md transition duration-300 hover:bg-white"
            aria-controls="menu-overlay"
            aria-expanded="false"
            aria-label="Open menu"
        >
            <span class="relative block h-2.5 w-5">
                <span class="absolute left-0 top-0 block h-px w-5 bg-ink"></span>
                <span class="absolute bottom-0 left-0 block h-px w-5 bg-ink"></span>
            </span>
        </button>
    </div>
</header>

<div id="menu-overlay" class="menu-overlay fixed inset-0 z-[60] bg-acid" aria-hidden="true">
    <div class="mx-auto flex h-full max-w-[1320px] flex-col px-6 py-5 md:px-10 md:py-6">
        <div class="flex items-center justify-between">
            <span class="font-serif text-[1.6rem] italic leading-none tracking-tight md:text-[1.8rem]">
                {{ $portfolio['name'] }}
            </span>

            <button
                id="menu-close"
                type="button"
                class="flex h-12 w-12 items-center justify-center rounded-full border border-ink/15 bg-white/40 transition duration-300 hover:bg-white"
                aria-label="Close menu"
            >
                <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true">
                    <path d="M3 3l10 10M13 3L3 13" stroke-linecap="round" />
                </svg>
            </button>
        </div>

        <nav class="flex flex-1 flex-col justify-center gap-1 md:gap-1.5" aria-label="Main">
            @foreach ($links as $index => $link)
                <a href="{{ $link['href'] }}" class="menu-link" data-menu-link>
                    <span>{{ $link['label'] }}</span>
                    <span class="menu-link-index">0{{ $index + 1 }}</span>
                </a>
            @endforeach
        </nav>

        <div class="flex flex-col gap-5 border-t border-ink/15 pt-6 pb-2 md:flex-row md:items-center md:justify-between">
            <a href="mailto:{{ $portfolio['email'] }}" class="link-underline text-sm text-ink/80">
                {{ $portfolio['email'] }}
            </a>

            <div class="flex items-center gap-4">
                <a href="tel:{{ $portfolio['phone_href'] }}" class="text-sm text-ink/80 transition hover:text-ink">
                    {{ $portfolio['phone'] }}
                </a>
                <span class="h-4 w-px bg-ink/20" aria-hidden="true"></span>
                <div class="flex gap-2">
                    @include('portfolio.partials.social')
                </div>
            </div>
        </div>
    </div>
</div>
