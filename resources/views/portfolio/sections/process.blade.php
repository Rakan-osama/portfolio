@php
    $offsets = [
        'md:mt-12 md:rotate-[1.2deg]',
        'md:-mt-2 md:rotate-[-1.4deg]',
        'md:mt-8 md:rotate-[1.8deg]',
    ];
@endphp

<section id="process" class="relative overflow-hidden bg-white pb-24 pt-6 md:pb-32">
    <div class="process-glow pointer-events-none absolute inset-x-0 top-0 h-[26rem] opacity-70 blur-3xl" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-[1180px] px-6 md:px-10">
        <div class="text-center">
            <p class="reveal reveal-up eyebrow-serif text-[1.15rem] text-ink/70 md:text-[1.35rem]" data-delay="0">
                /{{ $portfolio['sections']['process_eyebrow'] }}
            </p>
            <h2 class="reveal reveal-up mt-3 text-[2rem] font-medium leading-[1.02] tracking-[-0.035em] md:text-[3.15rem]" data-delay="90">
                {{ $portfolio['sections']['process_title'] }}
            </h2>
        </div>

        <div class="relative mt-20 md:mt-24">
            <svg class="pointer-events-none absolute -top-8 left-0 hidden h-40 w-full md:block" viewBox="0 0 1000 160" fill="none" preserveAspectRatio="none" aria-hidden="true">
                <path
                    d="M40 132C150 44 250 30 360 64s170 64 280 14 190-58 250 6"
                    stroke="#a8ea3c"
                    stroke-width="1.6"
                    stroke-linecap="round"
                    stroke-dasharray="7 9"
                />
                <circle cx="352" cy="62" r="4" fill="#a8ea3c" />
                <circle cx="648" cy="72" r="4" fill="#a8ea3c" />
            </svg>

            <div class="relative grid gap-14 md:grid-cols-3 md:gap-5">
                @foreach ($portfolio['process'] as $index => $step)
                    <div @class(['relative z-10', $offsets[$index] ?? ''])>
                        <span class="eyebrow-serif pointer-events-none absolute -top-12 left-1 z-20 text-[2.6rem] text-ink/75 md:-top-14 md:text-[3.2rem]" aria-hidden="true">
                            {{ $step['number'] }}
                        </span>

                        <article class="reveal reveal-up process-card h-full" data-delay="{{ $index * 140 }}">
                            <h3 class="text-[1.4rem] font-medium tracking-[-0.02em] md:text-[1.55rem]">
                                {{ $step['title'] }}
                            </h3>
                            <p class="mt-4 max-w-[19rem] text-[0.86rem] leading-relaxed text-ink/60">
                                {{ $step['body'] }}
                            </p>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
