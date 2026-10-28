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

<footer class="relative overflow-hidden bg-white pt-12 md:pt-16">
    <div class="mx-auto max-w-[1320px] px-6 md:px-10">
        <div class="flex flex-col gap-7 border-t border-line pt-8 md:flex-row md:items-center md:justify-between md:gap-8">
            <nav class="flex flex-wrap items-center gap-x-6 gap-y-3 text-[0.8rem] text-ink/70" aria-label="Footer">
                @foreach ($links as $link)
                    <a href="{{ $link['href'] }}" class="transition hover:text-ink">{{ $link['label'] }}</a>
                @endforeach
            </nav>

            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between sm:gap-6 md:justify-end">
                <div class="flex items-center gap-2">
                    @include('portfolio.partials.social')
                </div>

                <p class="text-[0.7rem] leading-relaxed text-muted">
                    &copy; {{ date('Y') }} {{ $portfolio['name'] }}.<br class="sm:hidden"> All rights reserved.
                </p>
            </div>
        </div>
    </div>

    <div class="mt-8 overflow-hidden md:mt-10">
        <p class="footer-name translate-y-[12%] px-4 text-center sm:px-6 md:px-10" aria-hidden="true">
            {{ $portfolio['name'] }}
        </p>
    </div>
</footer>
