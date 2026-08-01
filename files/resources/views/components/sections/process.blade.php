@props([
    'eyebrow' => 'How we work',
    'heading' => 'Three moves, repeated until it ships.',
    'steps' => [],
])
<!--
    The process rail: oversized hollow numerals with an accent hairline running
    between them on wide screens. The numeral is drawn with text-stroke (see
    .numeral in site.css) so it stays crisp and follows the ink colour.
-->
<section class="border-t border-line py-20 sm:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-[104rem] px-4 sm:px-8 lg:px-12">

        <div class="max-w-2xl" data-reveal>
            <p class="eyebrow text-ink">{{ $eyebrow }}</p>
            <h2 class="display-section mt-6 font-display font-semibold text-ink">{{ $heading }}</h2>
        </div>

        <div class="relative mt-16">
            <div class="pointer-events-none absolute top-7 right-0 left-0 hidden h-px bg-line lg:block" aria-hidden="true"></div>

            <ol class="relative grid gap-12 lg:grid-cols-3 lg:gap-10">
                @foreach ($steps as $step)
                    <li class="step-card group" data-reveal>
                        <div class="flex items-baseline gap-5 lg:block">
                            <p class="numeral font-display font-semibold">{{ $step->number }}</p>
                            <p class="font-display text-xs font-semibold uppercase tracking-[0.14em] text-faint lg:mt-8">{{ $step->kicker }}</p>
                        </div>
                        <h3 class="mt-4 font-display text-2xl font-semibold tracking-tight text-ink">{{ $step->title }}</h3>
                        <p class="mt-3 max-w-sm text-[15px] leading-relaxed text-muted">{{ $step->description }}</p>
                    </li>
                @endforeach
            </ol>
        </div>

    </div>
</section>
