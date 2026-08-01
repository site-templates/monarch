@props([
    'brand' => 'Monarch',
    'primaryLabel' => 'Pages',
    'primary' => [],
    'secondaryLabel' => 'Elsewhere',
    'secondary' => [],
    'menuNote' => 'New work, twice a year.',
    'menuEmail' => 'studio@monarch.design',
    'ctaText' => 'Start a project',
    'ctaLink' => '/services',
    'callText' => 'Book a call',
    'callLink' => '/about',
])
<!--
    THE MENU CAPSULE — Monarch's signature.

    One dark pill carries the menu toggle and the wordmark side by side, and a
    matching pill on the right carries the two calls to action. The toggle
    unfolds a large panel of oversized links; below the small breakpoint the
    right-hand pill folds into that panel so the capsule keeps its shape.
    Behaviour lives in public/js/main.js.
-->
<header id="header" class="fixed inset-x-0 top-0 z-50 pt-3 sm:pt-5">
    <div class="mx-auto flex w-full max-w-[104rem] items-start justify-between gap-3 px-4 sm:px-8 lg:px-12">

        <div class="relative">
            <div class="brand-capsule flex items-center rounded-full p-1.5 sm:p-2">
                <button
                    type="button"
                    data-menu-button
                    aria-expanded="false"
                    aria-controls="site-menu"
                    class="flex items-center gap-2.5 rounded-full bg-canvas px-4 py-2.5 text-ink transition-colors duration-200 hover:bg-panel sm:gap-3 sm:px-5 sm:py-3"
                >
                    <span class="menu-glyph" aria-hidden="true">
                        <span class="menu-bar"></span>
                        <span class="menu-bar"></span>
                        <span class="menu-bar"></span>
                    </span>
                    <span class="font-display text-[15px] font-medium tracking-tight sm:text-base">Menu</span>
                </button>

                <a href="/" class="flex items-center gap-2 px-4 sm:gap-2.5 sm:px-5" aria-label="{{ $brand }} — homepage">
                    <svg viewBox="0 0 32 32" class="size-5 shrink-0 text-accent-lift sm:size-6" fill="currentColor" aria-hidden="true"><path d="M2.2 2.6 11.4 6.8 15.3 15.8 3 12.6ZM3.6 15 15.3 18.2 11.6 24.2 6.6 29.4ZM29.8 2.6 20.6 6.8 16.7 15.8 29 12.6ZM28.4 15 16.7 18.2 20.4 24.2 25.4 29.4Z"/></svg>
                    <span class="font-display text-lg font-semibold tracking-tight text-canvas sm:text-xl">{{ $brand }}</span>
                </a>
            </div>

            <!-- The toggle needs JavaScript, so readers without it get a plain link row instead of an unreachable panel. -->
            <noscript>
                <div class="mt-3 flex flex-wrap gap-x-4 gap-y-2 rounded-3xl border border-line bg-panel px-5 py-4">
                    @foreach ($primary as $link)
                        <a href="{{ $link->url }}" class="font-display text-sm font-semibold uppercase tracking-tight text-ink">{{ $link->text }}</a>
                    @endforeach
                </div>
            </noscript>

            <div id="site-menu" data-menu-panel aria-hidden="true" class="absolute left-0 top-full z-10 mt-3 w-[min(40rem,calc(100vw-1.5rem))] rounded-3xl border border-line bg-panel p-6 shadow-2xl shadow-ink/15 sm:p-8">

                <div class="grid gap-8 sm:grid-cols-2 sm:gap-6">
                    <div>
                        <p class="eyebrow text-muted">{{ $primaryLabel }}</p>
                        <nav class="mt-5 flex flex-col items-start gap-1" aria-label="Main">
                            @foreach ($primary as $link)
                                <a href="{{ $link->url }}" class="mega-link font-display text-2xl font-semibold uppercase tracking-tight text-ink hover:text-accent-deep sm:text-[1.75rem]">{{ $link->text }}</a>
                            @endforeach
                        </nav>
                    </div>

                    <div class="sm:border-l sm:border-line sm:pl-6">
                        <p class="eyebrow text-muted">{{ $secondaryLabel }}</p>
                        <nav class="mt-5 flex flex-col items-start gap-1" aria-label="Secondary">
                            @foreach ($secondary as $link)
                                <a href="{{ $link->url }}" class="mega-link font-display text-2xl font-semibold uppercase tracking-tight text-ink hover:text-accent-deep sm:text-[1.75rem]">{{ $link->text }}</a>
                            @endforeach
                        </nav>
                    </div>
                </div>

                <div class="mt-8 flex flex-col gap-4 border-t border-line pt-6 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-muted">{{ $menuNote }}</p>
                        <a href="mailto:{{ $menuEmail }}" class="font-display text-[15px] font-medium text-ink underline decoration-accent decoration-2 underline-offset-4 transition-colors duration-200 hover:text-accent-deep">{{ $menuEmail }}</a>
                    </div>

                    <div class="flex items-center gap-2 sm:hidden">
                        <a href="{{ $ctaLink }}" class="flex-1 rounded-full bg-accent px-5 py-3 text-center text-sm font-semibold text-accent-ink">{{ $ctaText }}</a>
                        <a href="{{ $callLink }}" class="flex-1 rounded-full border border-line px-5 py-3 text-center text-sm font-semibold text-ink">{{ $callText }}</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="cta-capsule flex items-center rounded-full bg-ink p-1.5 max-sm:hidden sm:p-2">
            <a href="{{ $ctaLink }}" class="rounded-full bg-accent px-5 py-3 text-sm font-semibold text-accent-ink transition-colors duration-200 hover:bg-accent-deep sm:px-6">{{ $ctaText }}</a>
            <a href="{{ $callLink }}" class="rounded-full px-5 py-3 text-sm font-semibold text-canvas transition-opacity duration-200 hover:opacity-70 sm:px-6">{{ $callText }}</a>
        </div>

    </div>
</header>
