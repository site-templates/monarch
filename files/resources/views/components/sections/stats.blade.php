@props([
    'heading' => 'Nine years, one small team, and a habit of finishing.',
    'showHeading' => '1',
    'stats' => [],
])
<!--
    The proof rail — a full-bleed ink band carrying four figures split by
    hairlines. Drawn entirely in markup, so it costs nothing to load and it
    restyles with the palette.
-->
<section class="bg-ink py-16 text-canvas sm:py-20">
    <div class="mx-auto w-full max-w-[104rem] px-4 sm:px-8 lg:px-12">

        @if ($showHeading)
            <h2 class="max-w-2xl font-display text-2xl font-semibold tracking-tight sm:text-3xl" data-reveal>{{ $heading }}</h2>
        @endif

        <dl class="mt-12 grid gap-x-8 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 lg:gap-x-0">
            @foreach ($stats as $stat)
                <div class="lg:border-l lg:border-canvas/15 lg:px-8 lg:first:border-l-0 lg:first:pl-0" data-reveal>
                    <dt class="display-figure font-display font-semibold text-accent-lift">{{ $stat->value }}</dt>
                    <dd class="mt-3 max-w-[15rem] text-[15px] leading-snug text-canvas/60">{{ $stat->label }}</dd>
                </div>
            @endforeach
        </dl>

    </div>
</section>
