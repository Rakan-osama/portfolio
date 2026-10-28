<section class="border-y border-line/80 bg-white py-7 md:py-9" aria-label="Technologies I work with">
    <div class="marquee">
        <div class="marquee-track items-center">
            @foreach ([0, 1] as $copy)
                <div
                    @if ($copy === 1) aria-hidden="true" @endif
                    class="flex shrink-0 items-center gap-12 pr-12 md:gap-20 md:pr-20"
                >
                    @foreach ($portfolio['stack'] as $tech)
                        <div class="stack-item flex shrink-0 items-center gap-3">
                            <svg class="stack-mark h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                @switch($tech['mark'])
                                    @case('php')
                                        <path d="M9 6 3 12l6 6M15 6l6 6-6 6" />
                                        @break
                                    @case('laravel')
                                        <path d="M12 3 3 8l9 5 9-5-9-5Z" />
                                        <path d="M3 12l9 5 9-5M3 16l9 5 9-5" />
                                        @break
                                    @case('mysql')
                                        <ellipse cx="12" cy="6" rx="7" ry="3" />
                                        <path d="M5 6v12c0 1.7 3.1 3 7 3s7-1.3 7-3V6" />
                                        <path d="M5 12c0 1.7 3.1 3 7 3s7-1.3 7-3" />
                                        @break
                                    @case('csharp')
                                        <path d="M9.5 3 8 21M16.5 3 15 21M3.5 8.5h17M3 15.5h17" />
                                        @break
                                    @case('dotnet')
                                        <path d="M12 2.8 21 7.4v9.2l-9 4.6-9-4.6V7.4l9-4.6Z" />
                                        <path d="M3 7.4l9 4.6 9-4.6M12 12v9.2" />
                                        @break
                                    @case('git')
                                        <circle cx="6" cy="6" r="2.4" />
                                        <circle cx="6" cy="18" r="2.4" />
                                        <circle cx="18" cy="8" r="2.4" />
                                        <path d="M6 8.4v7.2M18 10.4c0 3.6-2.6 4.7-6.2 5.5-2 .4-3.5.9-4.2 2.1" />
                                        @break
                                @endswitch
                            </svg>
                            <span class="stack-mark text-[1.55rem] font-medium tracking-tight md:text-[2rem]">
                                {{ $tech['name'] }}
                            </span>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</section>
