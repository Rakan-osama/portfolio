<section id="home" class="hero-surface relative overflow-hidden pt-28 md:pt-32">
    <div class="mx-auto w-full max-w-[1320px] px-6 md:px-10">
        <div class="reveal reveal-up flex items-center justify-center gap-3 text-[0.72rem] font-medium tracking-wide text-ink/65 md:text-[0.8rem]" data-delay="0">
            <svg class="h-7 w-7 text-ink/55" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" aria-hidden="true">
                <path d="M9.2 4.2C7.2 6.5 6.6 9.4 7.5 12.2c.9 2.8 3.1 4.8 4.5 5.6" stroke-linecap="round" />
                <path d="M14.8 4.2c2 2.3 2.6 5.2 1.7 8-.9 2.8-3.1 4.8-4.5 5.6" stroke-linecap="round" />
                <path d="M8.1 7.4 6.2 6.6M7.3 10.2l-2.1-.4M7.9 13l-2 .6M9.4 15.6l-1.5 1.4" stroke-linecap="round" />
                <path d="m15.9 7.4 1.9-.8M16.7 10.2l2.1-.4M16.1 13l2 .6M14.6 15.6l1.5 1.4" stroke-linecap="round" />
            </svg>
            <span>{{ $portfolio['badge'] }}</span>
        </div>

        <h1 class="reveal reveal-blur mt-6 text-center md:mt-9" data-delay="120">
            <span class="anim-title block">
                <span class="hero-title-sans block">{{ $portfolio['headline_sans'] }}</span>
                <span class="hero-title-serif block">{{ $portfolio['headline_serif'] }}</span>
            </span>
        </h1>

        <div class="relative mt-2 grid items-center gap-8 md:mt-4 lg:-mt-28 lg:grid-cols-[1fr_auto_1fr] lg:items-center lg:gap-10">
            <div class="reveal reveal-left order-2 flex justify-center lg:order-1 lg:justify-start" data-delay="260">
                <span class="pill">
                    <span class="pill-dot" aria-hidden="true"></span>
                    {{ $portfolio['availability'] }}
                </span>
            </div>

            <div class="reveal reveal-scale order-1 flex justify-center lg:order-2" data-delay="200">
                <img
                    src="{{ asset($portfolio['photo']) }}"
                    alt="{{ $portfolio['photo_alt'] }}"
                    width="500"
                    height="500"
                    class="hero-photo w-[min(78vw,20rem)] select-none md:w-[23rem] lg:w-[28rem]"
                    fetchpriority="high"
                    draggable="false"
                >
            </div>

            <p class="reveal reveal-right order-3 mx-auto max-w-[18rem] text-center text-[0.92rem] leading-relaxed text-ink/70 lg:mx-0 lg:max-w-[15.5rem] lg:text-left" data-delay="340">
                {{ $portfolio['intro'] }}
            </p>
        </div>

        <div class="mt-8 flex flex-col items-center gap-8 pb-14 md:pb-20 lg:-mt-28 lg:flex-row lg:items-center lg:justify-between lg:gap-10">
            <div class="reveal reveal-up flex items-center gap-3.5" data-delay="420">
                <div class="flex -space-x-2.5">
                    @foreach ($portfolio['trust']['initials'] as $initials)
                        <span class="flex h-9 w-9 items-center justify-center rounded-full border-2 border-white/80 bg-ink text-[0.58rem] font-semibold tracking-wide text-white">
                            {{ $initials }}
                        </span>
                    @endforeach
                </div>

                <p class="max-w-[16rem] text-[0.7rem] leading-relaxed text-ink/60">
                    {{ $portfolio['trust']['label'] }}
                    <span class="font-semibold text-ink">{{ $portfolio['trust']['emphasis'] }}</span>
                    {{ $portfolio['trust']['rest'] }}
                </p>
            </div>

            <div class="reveal reveal-up flex flex-wrap items-center justify-center gap-3" data-delay="500">
                <a href="mailto:{{ $portfolio['email'] }}" class="btn-dark">
                    Get in Touch
                    <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true">
                        <path d="M2.5 8h11M9.5 4l4 4-4 4" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>

                @include('portfolio.partials.social')
            </div>
        </div>
    </div>
</section>
