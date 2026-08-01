@props([
    'eyebrow' => 'The long version',
    'heading' => 'How Monarch got here.',
    'milestones' => [],
])
<!--
    The studio story, hung off a vertical spine. Each entry's marker sits on
    the line; the accent dot marks the most recent one because it is last in
    the collection and the collection is written newest-last.
-->
<section class="bg-raised py-20 sm:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-[104rem] px-4 sm:px-8 lg:px-12">
        <div class="grid gap-12 lg:grid-cols-[1fr_1.6fr] lg:gap-20">

            <div class="lg:sticky lg:top-32 lg:self-start" data-reveal>
                <p class="eyebrow text-ink">{{ $eyebrow }}</p>
                <h2 class="display-section mt-6 max-w-sm font-display font-semibold text-ink">{{ $heading }}</h2>
            </div>

            <ol class="relative border-l border-line pl-8 sm:pl-12">
                @foreach ($milestones as $milestone)
                    <li class="relative pb-12 last:pb-0" data-reveal>
                        <span class="absolute top-2 -left-[2.125rem] size-2.5 rounded-full bg-line sm:-left-[3.125rem]" aria-hidden="true"></span>
                        <p class="font-display text-sm font-semibold tracking-[0.08em] text-accent-deep">{{ $milestone->year }}</p>
                        <h3 class="mt-3 font-display text-xl font-semibold tracking-tight text-ink sm:text-2xl">{{ $milestone->title }}</h3>
                        <p class="mt-3 max-w-lg text-[1.0625rem] leading-relaxed text-muted">{{ $milestone->description }}</p>
                    </li>
                @endforeach
            </ol>

        </div>
    </div>
</section>
