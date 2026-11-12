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
                    <span class="project-initials">{{ $project['initials'] }}</span>
                    <div class="project-lines"><i></i><i></i><i></i></div>
                    <div class="project-orb"></div>
                </div>
            </div>
            <p>Project screenshots are ready to be placed here.</p>
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

    <section class="project-gallery-placeholder section-shell">
        <div class="project-placeholder project-placeholder--wide reveal" data-reveal>
            <span>{{ $project['initials'] }}</span>
            <p>Desktop experience</p>
        </div>
        <div class="project-placeholder reveal" data-reveal>
            <span>{{ substr($project['initials'], 0, 1) }}</span>
            <p>Responsive detail</p>
        </div>
        <div class="project-placeholder reveal" data-reveal>
            <span>{{ substr($project['initials'], -1) }}</span>
            <p>System interface</p>
        </div>
    </section>

    <section class="next-project section-pad">
        <a class="section-shell" href="{{ route('projects.show', $nextProject['slug']) }}">
            <span>Next project</span>
            <h2>{{ $nextProject['name'] }}</h2>
            <i>↗</i>
        </a>
    </section>
@endsection
