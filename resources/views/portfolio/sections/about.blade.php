<section id="about" class="bg-white pb-24 md:pb-32">
    <div class="mx-auto max-w-[1180px] px-6 md:px-10">
        <div class="text-center">
            <p class="reveal reveal-up eyebrow-serif text-[1.15rem] text-ink/70 md:text-[1.35rem]" data-delay="0">
                /{{ $portfolio['sections']['about_eyebrow'] }}
            </p>
            <h2 class="reveal reveal-up mt-3 text-[2rem] font-medium leading-[1.02] tracking-[-0.035em] md:text-[3.15rem]" data-delay="90">
                {{ $portfolio['sections']['about_title'] }}
                <span class="font-serif font-normal italic">{{ $portfolio['sections']['about_serif'] }}</span>
            </h2>
        </div>

        <div class="mt-12 grid gap-10 md:mt-16 md:grid-cols-[0.82fr_1.18fr] md:items-start md:gap-14">
            <div class="reveal reveal-left" data-delay="0">
                <div class="overflow-hidden rounded-[1.5rem] bg-[linear-gradient(165deg,#f6fce9_0%,#e9f9cd_55%,#dcf7b1_100%)] p-3">
                    <img
                        src="{{ asset($portfolio['photo']) }}"
                        alt="{{ $portfolio['photo_alt'] }}"
                        loading="lazy"
                        class="mx-auto h-[20rem] w-full object-contain object-bottom md:h-[23rem]"
                    >

                    <div class="mt-2 flex items-center justify-between gap-3 rounded-2xl bg-white/85 px-4 py-3 backdrop-blur-md">
                        <div class="leading-tight">
                            <p class="text-[0.82rem] font-medium">{{ $portfolio['name'] }}</p>
                            <p class="text-[0.68rem] text-ink/55">{{ $portfolio['role'] }}</p>
                        </div>

                        @include('portfolio.partials.social')
                    </div>
                </div>

                <div class="mt-5 flex flex-wrap items-center gap-x-5 gap-y-2 text-[0.72rem] text-ink/55">
                    <span class="inline-flex items-center gap-1.5">
                        <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true">
                            <path d="M12 21s7-5.4 7-11a7 7 0 1 0-14 0c0 5.6 7 11 7 11Z" />
                            <circle cx="12" cy="10" r="2.6" />
                        </svg>
                        {{ $portfolio['location'] }}
                    </span>
                </div>
            </div>

            <div>
                <p class="reveal reveal-up max-w-[38rem] text-[0.95rem] leading-[1.8] text-ink/65" data-delay="0">
                    {{ $portfolio['summary'] }}
                </p>

                <div class="mt-8 grid gap-4 sm:grid-cols-2">
                    <div class="reveal reveal-up rounded-2xl border border-line bg-[linear-gradient(160deg,#fbfff4_0%,#f1fbdf_100%)] p-5" data-delay="120">
                        <div class="flex items-center gap-2 text-[0.6rem] font-semibold uppercase tracking-[0.2em] text-ink/45">
                            <svg class="h-4 w-4 text-ink/60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 4 2.5 8.5 12 13l9.5-4.5L12 4Z" />
                                <path d="M6 10.5V16c0 1.7 2.7 3 6 3s6-1.3 6-3v-5.5" />
                            </svg>
                            Education
                        </div>

                        <p class="mt-3 text-[0.9rem] font-medium leading-snug tracking-tight">
                            {{ $portfolio['education']['degree'] }}
                        </p>
                        <p class="mt-1 text-[0.78rem] text-ink/55">{{ $portfolio['education']['school'] }}</p>
                        <p class="mt-3 text-[0.7rem] tabular-nums text-muted">{{ $portfolio['education']['period'] }}</p>
                    </div>

                    <div class="reveal reveal-up rounded-2xl border border-line bg-white p-5" data-delay="220">
                        <div class="flex items-center gap-2 text-[0.6rem] font-semibold uppercase tracking-[0.2em] text-ink/45">
                            <svg class="h-4 w-4 text-ink/60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="9" />
                                <path d="M3.2 9.5h17.6M3.2 14.5h17.6M12 3c2.4 2.6 3.6 5.6 3.6 9s-1.2 6.4-3.6 9c-2.4-2.6-3.6-5.6-3.6-9s1.2-6.4 3.6-9Z" />
                            </svg>
                            Languages
                        </div>

                        <dl class="mt-3 divide-y divide-line/80">
                            @foreach ($portfolio['languages'] as $language)
                                <div class="flex items-center justify-between gap-3 py-2">
                                    <dt class="text-[0.84rem] font-medium tracking-tight">{{ $language['name'] }}</dt>
                                    <dd class="text-[0.72rem] text-ink/55">{{ $language['level'] }}</dd>
                                </div>
                            @endforeach
                        </dl>
                    </div>
                </div>

                <div class="reveal reveal-up mt-8 flex flex-wrap items-center gap-3" data-delay="320">
                    <a href="mailto:{{ $portfolio['email'] }}" class="btn-dark">
                        Get in Touch
                        <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true">
                            <path d="M2.5 8h11M9.5 4l4 4-4 4" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>

                    <a href="{{ $portfolio['github'] }}" target="_blank" rel="noopener noreferrer" class="link-underline px-2 text-[0.82rem] text-ink/70">
                        View GitHub
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
