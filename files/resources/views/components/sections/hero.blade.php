@props([
    'showRating' => '1',
    'ratingText' => 'Rated 4.9 by 40+ founders',
    'headingStart' => 'We design and build',
    'headingHighlight' => 'software worth',
    'headingEnd' => 'shipping.',
    'body' => 'Monarch is a small studio in Lisbon. We take products from a blank file to a real, launched v1 — strategy, brand, interface, and the engineering underneath it.',
    'ctaText' => 'Start a project',
    'ctaLink' => '/services',
    'callText' => 'See our work',
    'callLink' => '/journal',
    'image' => '/images/hero.jpg',
    'imageAlt' => 'The Monarch studio, late afternoon',
    'showStat' => '1',
    'statValue' => '6 weeks',
    'statLabel' => 'Median time from kickoff to a shipped v1',
])
<!--
    The split hero: an editorial column on the bone canvas beside a photograph
    that runs off the right edge of the viewport. The two stack on small
    screens, image last. The highlighted phrase is its own field so the lime
    block can land on whichever words matter.
-->
<section class="relative">
    <div class="mx-auto grid w-full max-w-[104rem] items-stretch lg:grid-cols-2">

        <div class="flex items-center px-4 pt-32 pb-14 sm:px-8 sm:pt-36 lg:px-12 lg:py-40">
            <div class="w-full max-w-xl">

                @if ($showRating)
                    <div class="inline-flex items-center gap-3 rounded-full border border-line bg-panel py-1.5 pr-4 pl-2" data-reveal>
                        <span class="flex items-center gap-0.5 text-accent-deep" aria-hidden="true">
                            <svg viewBox="0 0 20 20" class="size-3.5" fill="currentColor"><path d="M10 1.5 12.4 7l6 .5-4.6 4 1.4 5.9L10 14.3 4.8 17.4l1.4-5.9-4.6-4 6-.5z"/></svg>
                            <svg viewBox="0 0 20 20" class="size-3.5" fill="currentColor"><path d="M10 1.5 12.4 7l6 .5-4.6 4 1.4 5.9L10 14.3 4.8 17.4l1.4-5.9-4.6-4 6-.5z"/></svg>
                            <svg viewBox="0 0 20 20" class="size-3.5" fill="currentColor"><path d="M10 1.5 12.4 7l6 .5-4.6 4 1.4 5.9L10 14.3 4.8 17.4l1.4-5.9-4.6-4 6-.5z"/></svg>
                            <svg viewBox="0 0 20 20" class="size-3.5" fill="currentColor"><path d="M10 1.5 12.4 7l6 .5-4.6 4 1.4 5.9L10 14.3 4.8 17.4l1.4-5.9-4.6-4 6-.5z"/></svg>
                            <svg viewBox="0 0 20 20" class="size-3.5" fill="currentColor"><path d="M10 1.5 12.4 7l6 .5-4.6 4 1.4 5.9L10 14.3 4.8 17.4l1.4-5.9-4.6-4 6-.5z"/></svg>
                        </span>
                        <span class="text-[13px] font-medium text-ink">{{ $ratingText }}</span>
                    </div>
                @endif

                <h1 class="display-hero mt-7 font-display font-semibold text-ink reveal-1" data-reveal>
                    {{ $headingStart }}
                    <span class="box-decoration-clone bg-accent px-2 text-accent-ink">{{ $headingHighlight }}</span>
                    {{ $headingEnd }}
                </h1>

                <p class="mt-8 max-w-lg text-[1.0625rem] leading-relaxed text-muted reveal-2" data-reveal>{{ $body }}</p>

                <div class="mt-10 flex flex-wrap items-center gap-3 reveal-3" data-reveal>
                    <a href="{{ $ctaLink }}" class="rounded-full bg-ink px-7 py-4 text-[15px] font-semibold text-canvas transition-opacity duration-200 hover:opacity-85">{{ $ctaText }}</a>
                    <a href="{{ $callLink }}" class="rounded-full border border-line bg-panel px-7 py-4 text-[15px] font-semibold text-ink transition-colors duration-200 hover:border-ink">{{ $callText }}</a>
                </div>

            </div>
        </div>

        <div class="relative min-h-[22rem] overflow-hidden sm:min-h-[28rem] lg:min-h-[46rem]">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1536" height="2048" class="absolute inset-0 size-full object-cover">

            @if ($showStat)
                <div class="absolute bottom-6 left-6 max-w-[15rem] rounded-2xl bg-panel/95 p-5 backdrop-blur-sm sm:bottom-8 sm:left-8" data-reveal>
                    <p class="font-display text-3xl font-semibold tracking-tight text-ink">{{ $statValue }}</p>
                    <p class="mt-1.5 text-[13px] leading-snug text-muted">{{ $statLabel }}</p>
                </div>
            @endif
        </div>

    </div>
</section>
