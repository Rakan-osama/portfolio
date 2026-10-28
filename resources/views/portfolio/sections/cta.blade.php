<section id="contact" class="bg-white px-4 pb-4 md:px-6 md:pb-6">
    <div class="reveal reveal-scale work-panel overflow-hidden rounded-[1.6rem] md:rounded-[2.25rem]" data-delay="0">
        <div class="relative px-6 py-16 text-center md:py-24">
            <div class="pointer-events-none absolute left-1/2 top-0 h-64 w-64 -translate-x-1/2 rounded-full bg-white/40 blur-3xl" aria-hidden="true"></div>

            <h2 class="reveal reveal-up relative text-[2.2rem] font-medium leading-[1] tracking-[-0.04em] md:text-[4.1rem]" data-delay="140">
                {{ $portfolio['sections']['cta_sans'] }}
                <span class="font-serif font-normal italic">{{ $portfolio['sections']['cta_serif'] }}</span>
            </h2>

            <p class="reveal reveal-up relative mx-auto mt-5 max-w-[27rem] text-[0.9rem] leading-relaxed text-ink/65" data-delay="220">
                {{ $portfolio['sections']['cta_body'] }}
            </p>

            <div class="reveal reveal-up relative mt-9 flex flex-col items-center gap-6" data-delay="300">
                <a href="mailto:{{ $portfolio['email'] }}" class="btn-dark">
                    Get in touch
                    <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true">
                        <path d="M2.5 8h11M9.5 4l4 4-4 4" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>

                <div class="flex flex-wrap items-center justify-center gap-x-6 gap-y-2 text-[0.76rem] text-ink/60">
                    <a href="mailto:{{ $portfolio['email'] }}" class="link-underline">{{ $portfolio['email'] }}</a>
                    <span class="hidden h-3 w-px bg-ink/20 sm:block" aria-hidden="true"></span>
                    <a href="tel:{{ $portfolio['phone_href'] }}" class="link-underline">{{ $portfolio['phone'] }}</a>
                    <span class="hidden h-3 w-px bg-ink/20 sm:block" aria-hidden="true"></span>
                    <a
                        href="{{ $portfolio['whatsapp'] }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="link-underline inline-flex items-center gap-1.5"
                    >
                        <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M17.47 14.38c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.16-.17.2-.35.22-.64.08-.3-.15-1.26-.47-2.39-1.48-.88-.79-1.48-1.76-1.65-2.06-.17-.3-.02-.46.13-.6.13-.14.3-.35.45-.53.15-.17.2-.3.3-.5.1-.19.05-.37-.03-.52-.07-.15-.67-1.61-.91-2.2-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.48s1.07 2.88 1.21 3.08c.15.2 2.1 3.2 5.08 4.49.71.3 1.26.49 1.69.62.71.23 1.36.2 1.87.12.57-.09 1.76-.72 2.01-1.42.25-.69.25-1.29.17-1.41-.07-.13-.27-.2-.57-.35M12.05 21.8h-.01a9.87 9.87 0 0 1-5.03-1.38l-.36-.21-3.74.98 1-3.65-.24-.37a9.86 9.86 0 0 1-1.51-5.26c0-5.45 4.44-9.89 9.89-9.89 2.64 0 5.12 1.03 6.99 2.9a9.82 9.82 0 0 1 2.89 6.99c0 5.45-4.44 9.89-9.88 9.89m8.41-18.3A11.82 11.82 0 0 0 12.05 0C5.5 0 .16 5.34.16 11.9c0 2.09.55 4.14 1.59 5.94L.06 24l6.3-1.65a11.88 11.88 0 0 0 5.69 1.45h.01c6.55 0 11.89-5.34 11.89-11.9 0-3.18-1.24-6.17-3.49-8.4" />
                        </svg>
                        WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
