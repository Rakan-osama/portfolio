@extends('layouts.portfolio')

@section('page', 'home')

@section('content')
    <section class="hero section-shell" aria-labelledby="hero-title">
        <div class="hero-copy">
            <div class="hero-eyebrow" data-hero-reveal><span class="availability-dot"></span>Available for meaningful work</div>
            <p class="hero-intro" data-hero-reveal>Hi, I&rsquo;m</p>
            <h1 id="hero-title" class="hero-title" data-hero-reveal aria-label="Rakan Osama">
                <span data-split-text>Rakan</span><span class="hero-title__accent" data-split-text>Osama.</span>
            </h1>
            <div class="hero-role" data-hero-reveal>
                <strong>{{ $portfolio['profile']['role'] }}</strong><i></i><span>{{ $portfolio['profile']['location'] }}</span>
            </div>
            <p class="hero-summary" data-hero-reveal>{{ $portfolio['profile']['intro'] }}</p>
            <div class="hero-actions" data-hero-reveal>
                <a class="button button--primary magnetic" href="#work">Explore my work <span>&darr;</span></a>
                <a class="button button--contact magnetic" href="#contact">Contact me <span>&nearr;</span></a>
            </div>
            <div class="hero-socials" data-hero-reveal aria-label="Contact links">
                <a href="mailto:{{ $portfolio['contact']['email'] }}" aria-label="Email Rakan Osama" title="Email">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 5.5h18v13H3zM3.8 6.3 12 13l8.2-6.7" /></svg>
                </a>
                <a href="{{ $portfolio['contact']['whatsapp'] }}" target="_blank" rel="noreferrer" aria-label="WhatsApp Rakan Osama" title="WhatsApp">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 11.7a8 8 0 0 1-11.8 7L4 20l1.3-4A8 8 0 1 1 20 11.7Z" /><path d="M9 8.5c.4 2.7 2 4.4 4.7 5.1l1.2-1.1 2 .9c-.2 1.2-1 2-2.3 2-3.8-.3-6.8-3.2-7.2-7 0-1.2.7-2 1.8-2.3l1 2Z" /></svg>
                </a>
                <a href="{{ $portfolio['contact']['linkedin'] }}" target="_blank" rel="noreferrer" aria-label="Rakan Osama on LinkedIn" title="LinkedIn">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 9v10M5 5.8v.1M9.5 19V9m0 4.3c.7-2.7 6-3.2 6 1V19M19 19V9" /></svg>
                </a>
                <a href="{{ $portfolio['contact']['github'] }}" target="_blank" rel="noreferrer" aria-label="Rakan Osama on GitHub" title="GitHub">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3a9 9 0 0 0-2.8 17.5c.5.1.7-.2.7-.5v-2c-2.8.6-3.4-1.2-3.4-1.2-.5-1.1-1.1-1.4-1.1-1.4-.9-.6.1-.6.1-.6 1 0 1.6 1.1 1.6 1.1.9 1.6 2.4 1.1 2.9.8.1-.7.4-1.1.7-1.3-2.3-.3-4.7-1.1-4.7-5a3.9 3.9 0 0 1 1-2.7 3.7 3.7 0 0 1 .1-2.7s.8-.3 2.8 1a9.5 9.5 0 0 1 5.1 0c2-1.3 2.8-1 2.8-1a3.7 3.7 0 0 1 .1 2.7 3.9 3.9 0 0 1 1 2.7c0 3.9-2.4 4.7-4.7 5 .4.3.7 1 .7 1.9V20c0 .3.2.6.7.5A9 9 0 0 0 12 3Z" /></svg>
                </a>
            </div>
        </div>

        <div class="hero-visual" data-hero-reveal data-parallax-zone>
            <div class="hero-orbit hero-orbit--outer"></div><div class="hero-orbit hero-orbit--inner"></div>
            <div class="hero-stamp" aria-hidden="true">
                <svg viewBox="0 0 120 120" role="img"><defs><path id="stamp-path" d="M60,60 m-42,0 a42,42 0 1,1 84,0 a42,42 0 1,1 -84,0" /></defs><text><textPath href="#stamp-path">DESIGNING &middot; BUILDING &middot; REFINING &middot; </textPath></text></svg>
                <span>&#10022;</span>
            </div>
            <div class="portrait-frame" data-parallax-item>
                <div class="portrait-shape"></div>
                <img src="{{ asset($portfolio['profile']['portrait']) }}" alt="Rakan Osama wearing a grey suit" width="512" height="512">
                <span class="portrait-label portrait-label--one">Laravel specialist</span><span class="portrait-label portrait-label--two">Systems + interfaces</span>
            </div>
            <div class="hero-code-card" aria-hidden="true"><span>01</span><code>ideas &rarr; systems</code></div>
        </div>
    </section>

    <section class="tech-marquee" aria-label="Technologies">
        <div class="marquee-track">
            @foreach (array_merge($portfolio['technologies'], $portfolio['technologies']) as $technology)
                <span>{{ $technology }} <i>&#10022;</i></span>
            @endforeach
        </div>
    </section>

    <div class="section-transition" aria-hidden="true"><span></span><i></i></div>

    <section class="work section-shell section-pad" id="work">
        <div class="section-heading section-heading--row reveal" data-reveal>
            <div><span class="section-index">01 / Selected work</span><h2>Built to work.<br><em>Designed to stay.</em></h2></div>
            <p>A selection of products shaped across backend architecture, business workflows, and client-facing experiences.</p>
        </div>

        <div class="project-list">
            @foreach ($portfolio['projects'] as $index => $project)
                <article class="project-card project-card--{{ $project['accent'] }} reveal" data-reveal>
                    <a class="project-card__visual" href="{{ route('projects.show', $project['slug']) }}" aria-label="View {{ $project['name'] }} case study">
                        <div class="project-browser">
                            <div class="project-browser__bar"><i></i><i></i><i></i><span>{{ $project['name'] }}</span></div>
                            <div class="project-browser__canvas"><span class="project-initials">{{ $project['initials'] }}</span><div class="project-lines"><i></i><i></i><i></i></div><div class="project-orb"></div></div>
                        </div>
                        <span class="project-view">View case study &nearr;</span>
                    </a>
                    <div class="project-card__meta">
                        <div class="project-card__topline"><span>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span><time>{{ $project['period'] }}</time></div>
                        <div class="project-status"><i></i>{{ $project['status'] }}</div>
                        <h3><a href="{{ route('projects.show', $project['slug']) }}">{{ $project['name'] }}</a></h3>
                        <p>{{ $project['summary'] }}</p>
                        <ul>@foreach ($project['services'] as $service)<li>{{ $service }}</li>@endforeach</ul>
                        <div class="project-links">
                            <a href="{{ route('projects.show', $project['slug']) }}">Case study <span>&rarr;</span></a>
                            @if ($project['live_url'])
                                <a class="project-links__live" href="{{ $project['live_url'] }}" target="_blank" rel="noreferrer">Live production site <span>&nearr;</span></a>
                            @else
                                <span class="project-links__pending">Production link coming soon</span>
                            @endif
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    <div class="section-transition section-transition--cool" aria-hidden="true"><span></span><i></i></div>

    <section class="experience section-pad" id="experience">
        <div class="section-shell">
            <div class="section-heading section-heading--row reveal" data-reveal>
                <div><span class="section-index">02 / Experience</span><h2>Where craft met<br><em>real work.</em></h2></div>
                <p>From responsive interfaces to complex SaaS modules, each role sharpened a different part of my full-stack practice.</p>
            </div>
            <div class="timeline" aria-label="Career history from earliest role to present">
                @foreach (array_reverse($portfolio['experience']) as $index => $experience)
                    <article class="timeline-item reveal" data-reveal>
                        <div class="timeline-card__top"><span class="timeline-number">0{{ $index + 1 }}</span><time>{{ $experience['period'] }}</time></div>
                        <div class="timeline-role">
                            @if (str_contains($experience['period'], 'Present'))
                                <span class="present-tag"><i></i>Present workplace</span>
                            @endif
                            <h3>{{ $experience['role'] }}</h3><p>{{ $experience['company'] }} &middot; {{ $experience['location'] }}</p>
                        </div>
                        <p class="timeline-description">{{ $experience['description'] }}</p>
                    </article>
                @endforeach
            </div>
            <div class="education-card reveal" data-reveal>
                <span>Education</span><div><h3>{{ $portfolio['education']['degree'] }}</h3><p>{{ $portfolio['education']['school'] }}</p></div><time>{{ $portfolio['education']['period'] }}</time>
            </div>
        </div>
    </section>

    <div class="section-transition section-transition--slate" aria-hidden="true"><span></span><i></i></div>

    <section class="gallery section-pad" aria-labelledby="gallery-title">
        <div class="section-shell gallery-heading reveal" data-reveal>
            <span class="section-index">03 / Work in motion</span><h2 id="gallery-title">A growing archive<br>of <em>digital work.</em></h2>
            <p>Project imagery will live here &mdash; an always-moving visual reel built to expand with every new launch.</p>
        </div>
        <div class="gallery-marquee" aria-label="Project image placeholders"><div class="gallery-track">
            @foreach (array_merge($portfolio['projects'], $portfolio['projects']) as $index => $project)
                <a class="gallery-tile gallery-tile--{{ $project['accent'] }}" href="{{ route('projects.show', $project['slug']) }}" @if ($index >= count($portfolio['projects'])) aria-hidden="true" tabindex="-1" @endif>
                    <span class="gallery-tile__index">{{ str_pad(($index % count($portfolio['projects'])) + 1, 2, '0', STR_PAD_LEFT) }}</span><strong>{{ $project['initials'] }}</strong><span>{{ $project['name'] }}</span>
                </a>
            @endforeach
        </div></div>
    </section>

    <div class="section-transition" aria-hidden="true"><span></span><i></i></div>

    <section class="closing-note section-shell section-pad">
        <div class="closing-note__mark reveal" data-reveal>&#10022;</div><p class="reveal" data-reveal>I care about the details users notice<br>and the architecture they never have to.</p>
    </section>
@endsection
