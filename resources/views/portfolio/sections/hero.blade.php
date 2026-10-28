<!-- ═══ HERO ═══ -->
<section id="hero" class="relative min-h-screen flex items-center pt-16 overflow-hidden">
  <div class="anim-drift absolute top-1/4 right-0 w-96 h-96 bg-accent/10 rounded-full blur-3xl pointer-events-none" style="animation-delay: -6s" aria-hidden="true"></div>
  <div class="anim-drift absolute bottom-1/4 left-0 w-64 h-64 bg-zinc-200/50 dark:bg-zinc-800/30 rounded-full blur-3xl pointer-events-none" style="animation-delay: -12s" aria-hidden="true"></div>

  <div class="relative z-10 max-w-6xl mx-auto px-6 py-24 w-full">
    <div class="grid md:grid-cols-2 gap-12 items-center">

      <div>
        <p class="reveal text-sm font-medium text-accent tracking-widest uppercase mb-4">{{ $portfolio['hero']['tagline'] }}</p>
        <h1 class="reveal d1 font-display font-bold text-5xl md:text-6xl lg:text-7xl leading-[1.05] tracking-tight text-zinc-900 dark:text-white mb-6">
          Hi, I'm <span class="text-accent">{{ $portfolio['first_name'] }}</span>
        </h1>
        <p class="reveal d2 text-lg md:text-xl text-zinc-500 dark:text-zinc-400 font-light leading-relaxed max-w-md mb-10">
          {!! $portfolio['hero']['intro'] !!}
        </p>
        <div class="reveal d3 flex flex-wrap gap-4">
          <a href="#projects" class="shimmer active:scale-[0.97] transition-transform inline-flex items-center gap-2 bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 font-medium px-7 py-3.5 rounded-full hover:bg-zinc-700 dark:hover:bg-zinc-200 transition-colors text-sm">
            View my projects
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </a>
          <a href="#contact" class="active:scale-[0.97] transition-transform inline-flex items-center gap-2 border border-zinc-300 dark:border-zinc-700 text-zinc-700 dark:text-zinc-300 font-medium px-7 py-3.5 rounded-full hover:bg-zinc-50 dark:hover:bg-zinc-900 transition-colors text-sm">Get in touch</a>
        </div>
        <div class="reveal d4 flex gap-8 mt-14 pt-8 border-t border-zinc-100 dark:border-zinc-900">
          @foreach ($portfolio['hero']['stats'] as $stat)
            <div>
              <p class="font-display font-bold text-3xl text-zinc-900 dark:text-white">{{ $stat['value'] }}</p>
              <p class="text-xs text-zinc-500 dark:text-zinc-400 mt-1">{{ $stat['label'] }}</p>
            </div>
          @endforeach
        </div>
      </div>

      <div class="reveal d2 flex justify-center md:justify-end relative">
        <div class="anim-float relative w-72 h-72 md:w-96 md:h-96">
          <!-- glow halo behind the photo -->
          <div class="anim-glow absolute -inset-8 bg-accent/25 dark:bg-accent/20 rounded-full blur-3xl pointer-events-none" aria-hidden="true"></div>

          <!-- photo with animated gradient ring -->
          <div class="photo-ring relative w-full h-full bg-accent/5">
            <img src="{{ asset('assets/images/my_photo/20.jpg') }}" alt="{{ $portfolio['name'] }} — {{ $portfolio['title'] }}" loading="eager">
          </div>

          <!-- floating tech chips -->
          <div class="anim-float-soft absolute -top-4 -right-3 code-font text-xs font-medium text-zinc-100 bg-zinc-900 dark:bg-zinc-800 border border-zinc-700 dark:border-zinc-600 px-3 py-1.5 rounded-lg shadow-lg" style="animation-delay: .6s" aria-hidden="true">PHP</div>
          <div class="anim-float-soft absolute top-1/3 -left-9 code-font text-xs font-medium text-zinc-100 bg-zinc-900 dark:bg-zinc-800 border border-zinc-700 dark:border-zinc-600 px-3 py-1.5 rounded-lg shadow-lg" style="animation-delay: 1.4s" aria-hidden="true">Laravel</div>
          <div class="anim-float-soft absolute bottom-12 -right-6 code-font text-xs font-medium text-zinc-100 bg-zinc-900 dark:bg-zinc-800 border border-zinc-700 dark:border-zinc-600 px-3 py-1.5 rounded-lg shadow-lg" style="animation-delay: 2.1s" aria-hidden="true">MySQL</div>

          <div class="anim-float-soft absolute -bottom-5 -left-5 bg-accent text-white font-display font-bold text-sm px-4 py-2.5 rounded-2xl shadow-lg" style="animation-delay: .9s">
            {{ $portfolio['availability_badge'] }}
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
