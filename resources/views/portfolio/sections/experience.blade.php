<section id="experience" class="relative overflow-hidden bg-white pb-20 pt-8 md:pb-28 md:pt-10">
    <div class="process-glow pointer-events-none absolute left-1/2 top-24 h-[30rem] w-[30rem] -translate-x-1/2 opacity-40 blur-3xl" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-[1180px] px-6 md:px-10">
        <div class="text-center">
            <p class="reveal reveal-up eyebrow-serif text-[1.15rem] text-ink/70 md:text-[1.35rem]" data-delay="0">
                /{{ $portfolio['sections']['experience_eyebrow'] }}
            </p>
            <h2 class="reveal reveal-up mt-3 text-[2rem] font-medium leading-[1.02] tracking-[-0.035em] md:text-[3.15rem]" data-delay="90">
                {{ $portfolio['sections']['experience_title'] }}
                <span class="font-serif font-normal italic">{{ $portfolio['sections']['experience_serif'] }}</span>
            </h2>
        </div>

        <div class="relative mt-14 md:mt-20">
            <span
                class="pointer-events-none absolute bottom-6 left-[1.35rem] top-4 w-px bg-[linear-gradient(to_bottom,#b4f24a_0%,#96e01f_45%,rgba(180,242,74,0.25)_80%,transparent_100%)] md:left-[1.85rem]"
                aria-hidden="true"
            ></span>

            <ol class="space-y-6 md:space-y-8">
                @foreach ($portfolio['experience'] as $index => $job)
                    <li class="reveal reveal-left relative pl-14 md:pl-24" data-delay="{{ $index * 120 }}">
                        <span class="absolute left-0 top-1 flex h-11 w-11 items-center justify-center rounded-2xl bg-ink text-acid shadow-[0_18px_35px_-24px_rgba(11,11,11,0.9)] md:h-14 md:w-14 md:rounded-[1.15rem]">
                            <svg class="h-5 w-5 md:h-6 md:w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                @switch($job['icon'] ?? 'building')
                                    @case('code')
                                        <path d="M9 6 3 12l6 6M15 6l6 6-6 6" />
                                        @break
                                    @case('server')
                                        <rect x="3" y="4" width="18" height="7" rx="2" />
                                        <rect x="3" y="13" width="18" height="7" rx="2" />
                                        <path d="M7 7.5h.01M7 16.5h.01" />
                                        @break
                                    @default
                                        <path d="M4 21V6.5A2.5 2.5 0 0 1 6.5 4h8A2.5 2.5 0 0 1 17 6.5V21" />
                                        <path d="M17 10h1.5A2.5 2.5 0 0 1 21 12.5V21M2.5 21h19" />
                                        <path d="M7.5 8h6M7.5 12h6M10 21v-4h1" />
                                        @break
                                @endswitch
                            </svg>
                        </span>

                        <article class="experience-card p-5 md:p-7">
                            <div class="flex flex-wrap items-start justify-between gap-x-6 gap-y-3">
                                <div>
                                    <p class="text-[0.6rem] font-semibold uppercase tracking-[0.2em] text-muted">
                                        {{ $job['role'] }}
                                    </p>
                                    <h3 class="mt-2 text-[1.3rem] font-medium tracking-[-0.02em] md:text-[1.45rem]">
                                        {{ $job['company'] }}
                                    </h3>
                                    <p class="mt-1.5 flex items-center gap-1.5 text-[0.72rem] text-ink/50">
                                        <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true">
                                            <path d="M12 21s7-5.4 7-11a7 7 0 1 0-14 0c0 5.6 7 11 7 11Z" />
                                            <circle cx="12" cy="10" r="2.6" />
                                        </svg>
                                        {{ $job['location'] }}
                                    </p>
                                </div>

                                <span class="inline-flex items-center gap-2 rounded-full border border-line bg-acid-mist/60 px-3 py-1.5 text-[0.66rem] font-medium tracking-[0.02em] text-ink/65">
                                    @if (str_contains($job['period'], 'Present'))
                                        <span class="pill-dot" aria-hidden="true"></span>
                                    @else
                                        <span class="h-1.5 w-1.5 rounded-full bg-ink/25" aria-hidden="true"></span>
                                    @endif
                                    {{ $job['period'] }}
                                </span>
                            </div>

                            <p class="mt-4 max-w-[46rem] text-[0.86rem] leading-[1.75] text-ink/60">
                                {{ $job['description'] }}
                            </p>

                            @if (! empty($job['stack']))
                                <ul class="mt-5 flex flex-wrap items-center gap-2">
                                    @foreach ($job['stack'] as $tag)
                                        <li class="rounded-full border border-line px-2.5 py-1 text-[0.6rem] font-medium uppercase tracking-[0.1em] text-ink/55">
                                            {{ $tag }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </article>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>
