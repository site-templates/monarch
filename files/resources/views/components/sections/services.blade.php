@props([
    'eyebrow' => 'What we do',
    'heading' => 'Four disciplines, one team, no handoffs.',
    'body' => 'The people who decide what to build are the people who build it. That is the whole trick.',
    'services' => [],
])
<!--
    The capability bento. The first two cards run wide and the rest sit three
    across (see .bento in site.css), so the grid has rhythm instead of reading
    as one uniform row of boxes. Each card picks its glyph with the icon field.
-->
<section class="py-20 sm:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-[104rem] px-4 sm:px-8 lg:px-12">

        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <div class="max-w-2xl" data-reveal>
                <p class="eyebrow text-ink">{{ $eyebrow }}</p>
                <h2 class="display-section mt-6 font-display font-semibold text-ink">{{ $heading }}</h2>
            </div>
            <p class="max-w-sm text-[1.0625rem] leading-relaxed text-muted reveal-1" data-reveal>{{ $body }}</p>
        </div>

        <div class="bento mt-14 grid grid-cols-6 gap-4">
            @foreach ($services as $service)
                <a href="{{ $service->link }}" class="lift group flex flex-col rounded-3xl border border-line bg-panel p-7 sm:p-8" data-reveal>
                    <span class="flex size-11 items-center justify-center rounded-xl bg-accent text-accent-ink" aria-hidden="true">
                        @if ($service->icon == 'compass')
                            <svg viewBox="0 0 24 24" class="size-5" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="9"/><path d="m15.4 8.6-2 5.4-5.4 2 2-5.4z" stroke-linejoin="round"/></svg>
                        @endif
                        @if ($service->icon == 'spark')
                            <svg viewBox="0 0 24 24" class="size-5" fill="currentColor"><path d="M12 2.5 14 9.4l6.9 2-6.9 2-2 6.9-2-6.9-6.9-2 6.9-2z"/></svg>
                        @endif
                        @if ($service->icon == 'layers')
                            <svg viewBox="0 0 24 24" class="size-5" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"><path d="m12 3 8.5 4.6L12 12.2 3.5 7.6z"/><path d="m3.5 12.4 8.5 4.6 8.5-4.6"/></svg>
                        @endif
                        @if ($service->icon == 'code')
                            <svg viewBox="0 0 24 24" class="size-5" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="m8.4 8-4.4 4 4.4 4"/><path d="m15.6 8 4.4 4-4.4 4"/></svg>
                        @endif
                        @if ($service->icon == 'pulse')
                            <svg viewBox="0 0 24 24" class="size-5" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12.5h4l2.5-6 4 12 2.5-6h5"/></svg>
                        @endif
                    </span>

                    <h3 class="mt-6 font-display text-xl font-semibold tracking-tight text-ink">{{ $service->name }}</h3>
                    <p class="mt-3 mb-9 text-[15px] leading-relaxed text-muted">{{ $service->description }}</p>

                    <span class="mt-auto flex items-center justify-between gap-4 border-t border-line pt-5 text-[13px] font-medium text-faint">
                        <span>{{ $service->meta }}</span>
                        <svg viewBox="0 0 20 20" class="size-4 shrink-0 text-ink transition-transform duration-300 group-hover:translate-x-1" fill="currentColor" aria-hidden="true"><path d="M4.5 10.75a.75.75 0 0 1 .75-.75h7.19l-2.72-2.72a.75.75 0 1 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06l2.72-2.72H5.25a.75.75 0 0 1-.75-.75Z"/></svg>
                    </span>
                </a>
            @endforeach
        </div>

    </div>
</section>
