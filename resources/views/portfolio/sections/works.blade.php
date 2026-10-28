@php
    $featured = collect($portfolio['projects'])->where('featured', true);
    $more = collect($portfolio['projects'])->where('featured', false);
@endphp

<section id="work" class="bg-white pb-24 md:pb-32">
    <div class="mx-auto max-w-[1180px] px-6 md:px-10">
        <div class="text-center">
            <p class="reveal reveal-up eyebrow-serif text-[1.15rem] text-ink/70 md:text-[1.35rem]" data-delay="0">
                /{{ $portfolio['sections']['works_eyebrow'] }}
            </p>
            <h2 class="reveal reveal-up mt-3 text-[2rem] font-medium leading-[1.02] tracking-[-0.035em] md:text-[3.15rem]" data-delay="90">
                {{ $portfolio['sections']['works_title'] }}
            </h2>
        </div>

        <div class="mt-12 grid gap-x-8 gap-y-12 md:mt-16 md:grid-cols-2">
            @foreach ($featured as $project)
                <article class="reveal reveal-up group" data-delay="{{ 140 + $loop->index * 110 }}">
                    <a @if ($project['url']) href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer" @endif class="block">
                        <div class="overflow-hidden rounded-[1.15rem] border border-line bg-white p-1.5 shadow-[0_30px_60px_-46px_rgba(11,11,11,0.55)] transition duration-500 group-hover:-translate-y-1 group-hover:shadow-[0_36px_70px_-44px_rgba(11,11,11,0.6)]">
                            <div class="aspect-[16/10] overflow-hidden rounded-[0.85rem] bg-acid-mist">
                                @include('portfolio.partials.project-thumb', [
                                    'project' => $project,
                                    'variant' => $loop->index,
                                ])
                            </div>
                        </div>

                        <div class="mt-4 flex flex-wrap items-start justify-between gap-x-6 gap-y-2">
                            <div>
                                <h3 class="text-[0.98rem] font-medium tracking-tight">{{ $project['name'] }}</h3>
                                <p class="mt-0.5 text-[0.7rem] text-muted">{{ $project['period'] }}</p>
                            </div>

                            <ul class="flex flex-wrap items-center gap-2">
                                @foreach ($project['tags'] as $tag)
                                    <li class="rounded-full border border-line px-2.5 py-1 text-[0.62rem] font-medium uppercase tracking-[0.08em] text-ink/55">
                                        {{ $tag }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </a>
                </article>
            @endforeach

            @foreach ($more as $project)
                <article class="reveal reveal-up group md:col-span-2" data-delay="{{ 140 + ($featured->count() + $loop->index) * 110 }}">
                    <a @if ($project['url']) href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer" @endif class="grid items-center gap-6 md:grid-cols-[1.35fr_1fr] md:gap-10">
                        <div class="overflow-hidden rounded-[1.15rem] border border-line bg-white p-1.5 shadow-[0_30px_60px_-46px_rgba(11,11,11,0.55)] transition duration-500 group-hover:-translate-y-1">
                            <div class="aspect-[16/9] overflow-hidden rounded-[0.85rem] bg-acid-mist">
                                @include('portfolio.partials.project-thumb', [
                                    'project' => $project,
                                    'variant' => $loop->index + 3,
                                ])
                            </div>
                        </div>

                        <div>
                            <h3 class="text-[1.15rem] font-medium tracking-tight">{{ $project['name'] }}</h3>
                            <p class="mt-1 text-[0.7rem] text-muted">{{ $project['period'] }}</p>
                            <p class="mt-4 max-w-[26rem] text-[0.86rem] leading-relaxed text-ink/60">
                                {{ $project['description'] }}
                            </p>

                            <ul class="mt-5 flex flex-wrap items-center gap-2">
                                @foreach ($project['tags'] as $tag)
                                    <li class="rounded-full border border-line px-2.5 py-1 text-[0.62rem] font-medium uppercase tracking-[0.08em] text-ink/55">
                                        {{ $tag }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </a>
                </article>
            @endforeach
        </div>
    </div>
</section>
