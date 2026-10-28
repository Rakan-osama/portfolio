<!-- ═══ ABOUT ═══ -->
<section id="about" class="py-24 bg-zinc-50 dark:bg-zinc-900/40 relative overflow-hidden">
  <div class="anim-drift absolute -bottom-24 -right-24 w-72 h-72 bg-accent/5 rounded-full blur-3xl pointer-events-none" aria-hidden="true"></div>
  <div class="max-w-6xl mx-auto px-6 relative">
    <div class="grid md:grid-cols-2 gap-16 items-start">

      <div class="reveal order-2 md:order-1 w-full">
        <!-- education card -->
        <div class="card-h max-w-sm mx-auto bg-white dark:bg-zinc-900 border border-zinc-100 dark:border-zinc-800 hover:border-accent rounded-3xl p-8 shadow-sm">
          <div class="w-12 h-12 flex items-center justify-center bg-orange-50 dark:bg-zinc-800 rounded-xl mb-6">
            <svg style="animation-delay: 1.6s" class="anim-float-soft w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 6V4a2 2 0 012-2h10a2 2 0 012 2v2"/></svg>
          </div>
          <p class="text-xs font-medium text-zinc-500 dark:text-zinc-400 uppercase tracking-widest mb-2">Education</p>
          <h3 class="font-display font-bold text-xl text-zinc-900 dark:text-white leading-snug mb-2">{{ $portfolio['about']['education']['degree'] }}</h3>
          <p class="text-sm text-zinc-500 dark:text-zinc-400 mb-1">{{ $portfolio['about']['education']['university'] }}</p>
          <p class="text-xs text-zinc-400">{{ $portfolio['about']['education']['period'] }}</p>
        </div>
      </div>

      <div class="order-1 md:order-2">
        <p class="reveal text-xs font-medium text-accent tracking-widest uppercase mb-3">About me</p>
        <h2 class="reveal d1 font-display font-bold text-4xl md:text-5xl text-zinc-900 dark:text-white leading-tight mb-6">A bit about<br>who I am</h2>
        @foreach ($portfolio['about']['paragraphs'] as $paragraph)
          <p style="transition-delay: {{ 200 + $loop->index * 140 }}ms" class="reveal text-zinc-500 dark:text-zinc-400 leading-relaxed {{ $loop->last ? 'mb-8' : 'mb-4' }}">
            {{ $paragraph }}
          </p>
        @endforeach
        <div style="transition-delay: 420ms" class="reveal mb-10">
          <p class="text-xs font-medium text-zinc-500 dark:text-zinc-400 uppercase tracking-widest mb-3">Technologies</p>
          <div class="flex flex-wrap gap-2" role="list" aria-label="Technologies">
            @foreach ($portfolio['about']['skills']['technologies'] as $skill)
              <span style="animation-delay: {{ 150 + $loop->index * 70 }}ms" role="listitem" class="stag chip-pop text-sm bg-white dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 text-zinc-700 dark:text-zinc-300 px-3.5 py-1.5 rounded-full">{{ $skill }}</span>
            @endforeach
          </div>
        </div>
        <div style="transition-delay: 560ms" class="reveal">
          <p class="text-xs font-medium text-zinc-500 dark:text-zinc-400 uppercase tracking-widest mb-3">Core concepts</p>
          <div class="flex flex-wrap gap-2" role="list" aria-label="Core concepts">
            @foreach ($portfolio['about']['skills']['core_concepts'] as $skill)
              <span style="animation-delay: {{ 150 + $loop->index * 60 }}ms" role="listitem" class="stag chip-pop text-sm bg-white dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 text-zinc-700 dark:text-zinc-300 px-3.5 py-1.5 rounded-full">{{ $skill }}</span>
            @endforeach
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
