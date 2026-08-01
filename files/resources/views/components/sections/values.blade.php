@props([
    'eyebrow' => 'How we think',
    'heading' => 'Four opinions we keep running into.',
    'values' => [],
])
<!--
    The values list — deliberately a hairline-ruled list rather than a card
    grid, so it reads as an essay in the middle of a page of panels.
-->
<section class="border-t border-line py-20 sm:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-[104rem] px-4 sm:px-8 lg:px-12">

        <div class="max-w-2xl" data-reveal>
            <p class="eyebrow text-ink">{{ $eyebrow }}</p>
            <h2 class="display-section mt-6 font-display font-semibold text-ink">{{ $heading }}</h2>
        </div>

        <ol class="mt-14">
            @foreach ($values as $value)
                <li class="grid gap-4 border-t border-line py-9 last:border-b lg:grid-cols-[5rem_1fr_1.1fr] lg:items-baseline lg:gap-12" data-reveal>
                    <span class="font-display text-sm font-semibold text-accent-deep">{{ $value->number }}</span>
                    <h3 class="font-display text-2xl font-semibold tracking-tight text-ink sm:text-[1.75rem]">{{ $value->title }}</h3>
                    <p class="max-w-xl text-[1.0625rem] leading-relaxed text-muted">{{ $value->description }}</p>
                </li>
            @endforeach
        </ol>

    </div>
</section>
