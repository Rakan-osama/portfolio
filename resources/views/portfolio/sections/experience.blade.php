<!-- ═══ EXPERIENCE ═══ -->
<section id="experience" class="py-24 relative overflow-hidden">
  <div class="anim-drift absolute top-1/2 -right-32 w-72 h-72 bg-accent/5 dark:bg-accent/5 rounded-full blur-3xl pointer-events-none" style="animation-delay: -4s" aria-hidden="true"></div>
  <div class="max-w-6xl mx-auto px-6 relative">
    <div class="mb-14">
      <p class="reveal text-xs font-medium text-accent tracking-widest uppercase mb-3">Career</p>
      <h2 class="reveal d1 font-display font-bold text-4xl md:text-5xl text-zinc-900 dark:text-white">Experience</h2>
    </div>

    <div class="relative">
      <!-- timeline line -->
      <div class="absolute left-[7px] top-2 bottom-2 w-px bg-zinc-200 dark:bg-zinc-800 hidden md:block" aria-hidden="true"></div>

      <div class="flex flex-col gap-10">
        @foreach ($portfolio['experience'] as $job)
          <div style="transition-delay: {{ $loop->index * 160 }}ms" class="reveal relative md:pl-10">
            <!-- timeline dot -->
            <span class="dot-pulse absolute left-0 top-2 w-[15px] h-[15px] rounded-full bg-accent ring-4 ring-zinc-100 dark:ring-zinc-900 hidden md:block" aria-hidden="true"></span>

            <article class="card-h group bg-white dark:bg-zinc-900 border border-zinc-100 dark:border-zinc-800 hover:border-accent rounded-2xl p-7 md:p-8">
              <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-2 mb-3">
                <div>
                  <h3 class="font-display font-bold text-xl text-zinc-900 dark:text-white group-hover:text-accent transition-colors">{{ $job['role'] }}</h3>
                  <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-0.5">{{ $job['company'] }} • {{ $job['location'] }}</p>
                </div>
                <p class="text-xs font-medium text-accent bg-orange-50 dark:bg-zinc-800 border border-orange-200 dark:border-zinc-700 px-3 py-1 rounded-full self-start sm:self-auto">{{ $job['period'] }}</p>
              </div>
              <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed mb-5">{{ $job['description'] }}</p>
              <div class="flex flex-wrap gap-2">
                @foreach ($job['stack'] as $tech)
                  <span class="stag text-xs bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 text-zinc-600 dark:text-zinc-400 px-2.5 py-1 rounded-full">{{ $tech }}</span>
                @endforeach
              </div>
            </article>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
