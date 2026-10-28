<!-- ═══ EXPERTISE ═══ -->
<section id="expertise" class="py-24 bg-zinc-50 dark:bg-zinc-900/40 relative overflow-hidden">
  <div class="anim-drift absolute -top-24 -right-24 w-72 h-72 bg-accent/5 rounded-full blur-3xl pointer-events-none" aria-hidden="true"></div>
  <div class="max-w-6xl mx-auto px-6 relative">
    <div class="mb-14">
      <p class="reveal text-xs font-medium text-accent tracking-widest uppercase mb-3">What I do</p>
      <h2 class="reveal d1 font-display font-bold text-4xl md:text-5xl text-zinc-900 dark:text-white">Expertise</h2>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      @foreach ($portfolio['expertise'] as $item)
        <article style="transition-delay: {{ $loop->index * 140 }}ms" class="reveal card-h group bg-white dark:bg-zinc-900 rounded-2xl p-8 border border-zinc-100 dark:border-zinc-800 hover:border-accent">
          <div class="w-12 h-12 flex items-center justify-center bg-orange-50 dark:bg-zinc-800 rounded-xl mb-6 group-hover:bg-accent/10 transition-all duration-300 group-hover:scale-110 group-hover:-rotate-3">
            @switch($item['icon'])
              @case('server')
                <svg style="animation-delay: {{ $loop->index * 500 }}ms" class="anim-float-soft w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12H3a2 2 0 01-2-2V6a2 2 0 012-2h4a2 2 0 012 2v1m0-4h10a2 2 0 012 2v4a2 2 0 01-2 2h-4m-8 3h10a2 2 0 012 2v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4a2 2 0 012-2z"/></svg>
                @break
              @case('database')
                <svg style="animation-delay: {{ $loop->index * 500 }}ms" class="anim-float-soft w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7c0 1.657 3.582 3 8 3s8-1.343 8-3-3.582-3-8-3-8 1.343-8 3z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 1.657 3.582 3 8 3s8-1.343 8-3V7m-16 5c0 1.657 3.582 3 8 3s8-1.343 8-3"/></svg>
                @break
              @case('dashboard')
                <svg style="animation-delay: {{ $loop->index * 500 }}ms" class="anim-float-soft w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2h-2"/></svg>
                @break
            @endswitch
          </div>
          <h3 class="font-display font-bold text-xl text-zinc-900 dark:text-white mb-3 group-hover:text-accent transition-colors">{{ $item['title'] }}</h3>
          <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed mb-5">{{ $item['description'] }}</p>
          <div class="flex flex-wrap gap-2">
            @foreach ($item['tags'] as $tag)
              <span class="stag text-xs bg-zinc-100 dark:bg-zinc-800 text-zinc-600 dark:text-zinc-400 px-2.5 py-1 rounded-full">{{ $tag }}</span>
            @endforeach
          </div>
        </article>
      @endforeach
    </div>
  </div>
</section>
