@extends('layouts.portfolio')

@section('title', $project['name'].' — Rakan Osama')
@section('page', 'project')

@section('content')
    <section class="project-hero section-shell">
        <a class="project-back" href="{{ route('portfolio.index') }}#work">← Back to selected work</a>
        <div class="project-hero__grid">
            <div>
                <span class="project-hero__eyebrow">{{ $project['client'] }} · {{ $project['status'] }}</span>
                <h1>{{ $project['name'] }}</h1>
                <p>{{ $project['summary'] }}</p>
                <div class="project-hero__actions">
                    @if ($project['live_url'])
                        <a class="button button--primary" href="{{ $project['live_url'] }}" target="_blank" rel="noreferrer">Visit live site <span>↗</span></a>
                    @else
                        <span class="project-progress"><i></i> Product currently in progress</span>
                    @endif
                </div>
            </div>
            <div class="project-hero__meta">
                <div><span>Timeline</span><strong>{{ $project['period'] }}</strong></div>
                <div><span>My contribution</span><strong>{{ implode(' · ', $project['services']) }}</strong></div>
            </div>
        </div>
    </section>

    <section class="project-showcase project-card--{{ $project['accent'] }}">
        <div class="project-showcase__frame reveal" data-reveal>
            <div class="project-browser project-browser--large">
                <div class="project-browser__bar"><i></i><i></i><i></i><span>{{ $project['name'] }}</span></div>
                <div class="project-browser__canvas">
                    <img src="{{ asset($project['images'][0]) }}" alt="{{ $project['name'] }} interface" width="1600" height="900">
                </div>
            </div>
            <p>Production interface</p>
        </div>
    </section>

    <section class="project-overview section-shell section-pad">
        <div class="project-overview__heading reveal" data-reveal>
            <span class="section-index">Project overview</span>
            <h2>From requirements<br>to a working <em>system.</em></h2>
        </div>
        <div class="project-overview__body reveal" data-reveal>
            <p>{{ $project['description'] }}</p>
            <div class="project-services">
                @foreach ($project['services'] as $index => $service)
                    <span><i>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</i>{{ $service }}</span>
                @endforeach
            </div>
        </div>
    </section>

    <section class="project-gallery section-shell" aria-label="{{ $project['name'] }} screenshots">
        @foreach (array_slice($project['images'], 1) as $imageIndex => $image)
            <figure class="project-gallery__item {{ $imageIndex === 0 ? 'project-gallery__item--wide' : '' }} reveal" data-reveal>
                <img src="{{ asset($image) }}" alt="{{ $project['name'] }} interface screenshot {{ $imageIndex + 2 }}" width="1600" height="900" loading="lazy">
            </figure>
        @endforeach
    </section>

    <section class="next-project section-pad">
        <a class="section-shell" href="{{ route('projects.show', $nextProject['slug']) }}">
            <span>Next project</span>
            <h2>{{ $nextProject['name'] }}</h2>
            <i>↗</i>
        </a>
    </section>
@endsection
