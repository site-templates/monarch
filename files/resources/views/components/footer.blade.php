@props([
    'brand' => 'Monarch',
    'statement' => 'A product studio for ambitious software. Strategy, brand, design, and engineering, from one small team.',
    'sitemapLabel' => 'Pages',
    'sitemap' => [],
    'elsewhereLabel' => 'Elsewhere',
    'elsewhere' => [],
    'socialLabel' => 'Follow',
    'social' => [],
    'email' => 'studio@monarch.design',
    'city' => 'Lisbon · Remote',
    'legal' => '© 2026 Monarch Studio. All rights reserved.',
    'showWordmark' => '1',
])
<!--
    The footer closes the page on the ink panel: the mark and statement, three
    link columns, then an oversized wordmark that bleeds to both edges — the
    last beat of the visit and a deliberate echo of the capsule up top.
-->
<footer class="bg-ink text-canvas">
    <div class="mx-auto w-full max-w-6xl px-6 pt-20 pb-10 sm:pt-28">

        <div class="grid gap-12 lg:grid-cols-[1.4fr_1fr_1fr_1fr] lg:gap-8">

            <div class="max-w-sm">
                <a href="/" class="flex items-center gap-2.5" aria-label="{{ $brand }} — homepage">
                    <svg viewBox="0 0 32 32" class="size-6 shrink-0 text-accent-lift" fill="currentColor" aria-hidden="true"><path d="M2.2 2.6 11.4 6.8 15.3 15.8 3 12.6ZM3.6 15 15.3 18.2 11.6 24.2 6.6 29.4ZM29.8 2.6 20.6 6.8 16.7 15.8 29 12.6ZM28.4 15 16.7 18.2 20.4 24.2 25.4 29.4Z"/></svg>
                    <span class="font-display text-xl font-semibold tracking-tight">{{ $brand }}</span>
                </a>
                <p class="mt-5 text-[15px] leading-relaxed text-canvas/60">{{ $statement }}</p>
                <a href="mailto:{{ $email }}" class="mt-6 inline-block font-display text-lg font-medium tracking-tight underline decoration-accent-lift decoration-2 underline-offset-[6px] transition-colors duration-200 hover:text-accent-lift">{{ $email }}</a>
            </div>

            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.14em] text-canvas/40">{{ $sitemapLabel }}</p>
                <ul class="mt-5 flex flex-col gap-3">
                    @foreach ($sitemap as $link)
                        <li><a href="{{ $link->url }}" class="text-[15px] text-canvas/70 transition-colors duration-200 hover:text-accent-lift">{{ $link->text }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.14em] text-canvas/40">{{ $elsewhereLabel }}</p>
                <ul class="mt-5 flex flex-col gap-3">
                    @foreach ($elsewhere as $link)
                        <li><a href="{{ $link->url }}" class="text-[15px] text-canvas/70 transition-colors duration-200 hover:text-accent-lift">{{ $link->text }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.14em] text-canvas/40">{{ $socialLabel }}</p>
                <ul class="mt-5 flex flex-col gap-3">
                    @foreach ($social as $link)
                        <li><a href="{{ $link->url }}" target="_blank" rel="noopener" class="text-[15px] text-canvas/70 transition-colors duration-200 hover:text-accent-lift">{{ $link->text }}</a></li>
                    @endforeach
                </ul>
            </div>

        </div>

        @if ($showWordmark)
            <div class="mt-20 border-t border-canvas/10 pt-10" aria-hidden="true">
                <p class="font-display text-[clamp(3.5rem,15vw,11rem)] leading-[0.8] font-semibold tracking-[-0.05em] text-canvas/10">{{ $brand }}</p>
            </div>
        @endif

        <div class="mt-10 flex flex-col gap-2 text-[13px] text-canvas/40 sm:flex-row sm:items-center sm:justify-between">
            <p>{{ $legal }}</p>
            <p>{{ $city }}</p>
        </div>

    </div>
</footer>
