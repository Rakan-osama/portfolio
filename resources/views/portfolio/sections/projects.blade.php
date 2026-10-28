<!-- ═══ PROJECTS ═══ -->
<section id="projects" class="py-24 relative overflow-hidden">
  <div class="anim-drift absolute top-1/3 -left-32 w-80 h-80 bg-accent/5 dark:bg-accent/5 rounded-full blur-3xl pointer-events-none" style="animation-delay: -8s" aria-hidden="true"></div>
  <div class="max-w-6xl mx-auto px-6 relative">
    <div class="mb-14">
      <p class="reveal text-xs font-medium text-accent tracking-widest uppercase mb-3">Portfolio</p>
      <h2 class="reveal d1 font-display font-bold text-4xl md:text-5xl text-zinc-900 dark:text-white">Selected work</h2>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
      @foreach ($portfolio['projects'] as $project)
        @php($featured = $loop->first)
        <article style="transition-delay: {{ $loop->index * 130 }}ms" class="reveal card-h group rounded-2xl overflow-hidden bg-zinc-100 dark:bg-zinc-900 border border-zinc-100 dark:border-zinc-800 hover:border-accent {{ $featured ? 'md:row-span-2' : '' }}">
          <div class="pf w-full {{ $featured ? 'h-64 md:h-[22rem]' : 'h-48' }}">
            <div class="relative h-full w-full overflow-hidden transition-transform duration-500 ease-out group-hover:scale-110">
              <div class="anim-gradient absolute inset-0 bg-linear-to-br {{ $project['gradient'] }}"></div>
              <div class="relative flex h-full items-center justify-center">
                <span class="anim-float-soft font-display font-bold text-6xl text-white/80 tracking-tight select-none transition-[letter-spacing] duration-500 group-hover:tracking-widest" style="animation-delay: {{ $loop->index * 400 }}ms">{{ $project['abbr'] }}</span>
              </div>
            </div>
          </div>
          <div class="{{ $featured ? 'p-7' : 'p-6' }}">
            <div class="flex flex-wrap items-center gap-2 {{ $featured ? 'mb-4' : 'mb-3' }}">
              @foreach ($project['tags'] as $tagIndex => $tag)
                <span class="{{ $tagIndex === 0
                    ? 'text-xs bg-orange-50 dark:bg-zinc-800 text-accent border border-orange-200 dark:border-zinc-700'
                    : 'text-xs bg-zinc-200 dark:bg-zinc-800 text-zinc-600 dark:text-zinc-400' }} px-3 py-1 rounded-full transition-colors group-hover:border-accent">{{ $tag }}</span>
              @endforeach
            </div>
            <h3 class="font-display font-bold {{ $featured ? 'text-2xl' : 'text-xl' }} text-zinc-900 dark:text-white mb-1.5 group-hover:text-accent transition-colors">{{ $project['name'] }}</h3>
            <p class="text-xs text-zinc-400 mb-3">{{ $project['period'] }}</p>
            <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed {{ $featured ? 'mb-6' : 'mb-4' }}">{{ $project['description'] }}</p>
            @if (filled($project['url']))
              <a href="{{ $project['url'] }}" rel="noopener noreferrer" target="_blank" class="inline-flex items-center gap-1.5 text-sm font-medium text-zinc-900 dark:text-white nl">
                View project
                <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
              </a>
            @else
              <span class="inline-flex items-center gap-1.5 text-sm font-medium text-zinc-400 dark:text-zinc-500">
                <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l5.69 5.69"/></svg>
                Case study available on request
              </span>
            @endif
          </div>
        </article>
      @endforeach
    </div>
  </div>
</section>
