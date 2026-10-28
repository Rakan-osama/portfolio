<!-- ═══ FOOTER ═══ -->
<footer class="border-t border-zinc-100 dark:border-zinc-900 relative z-10 bg-white dark:bg-zinc-950">
  <div class="max-w-6xl mx-auto px-6 py-8 flex flex-col sm:flex-row items-center justify-between gap-4">
    <p class="text-sm text-zinc-400">
      © {{ now()->year }} {{ config('portfolio.name') }}. All rights reserved.
    </p>
    <p class="text-xs text-zinc-500 text-center sm:text-right">
      Built with
      <a href="https://laravel.com" rel="noopener noreferrer" target="_blank" class="hover:text-accent transition-colors">Laravel</a>,
      <a href="https://tailwindcss.com" rel="noopener noreferrer" target="_blank" class="hover:text-accent transition-colors">Tailwind CSS</a>
      &amp;
      <a href="https://alpinejs.dev" rel="noopener noreferrer" target="_blank" class="hover:text-accent transition-colors">Alpine.js</a>
    </p>
  </div>
</footer>
