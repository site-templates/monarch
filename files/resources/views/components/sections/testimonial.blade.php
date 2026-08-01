@props([
    'eyebrow' => 'The receipts',
    'quote' => 'They cut our roadmap in half and we launched a month early. The half they cut was the half we would have regretted.',
    'name' => 'Dana Okafor',
    'role' => 'Co-founder, Halcyon',
    'image' => '/images/portrait-quote.jpg',
    'imageAlt' => 'Dana Okafor',
    'showMetric' => '1',
    'metricValue' => '+38%',
    'metricLabel' => 'Activation in the first quarter after launch',
    'linkText' => 'Read the write-up',
    'linkUrl' => '/journal',
    'showLink' => '1',
])
<!--
    One quote, full-bleed on ink. Deliberately a single voice rather than a row
    of testimonial cards — one specific sentence outweighs three vague ones.
-->
<section class="bg-ink py-20 text-canvas sm:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-[104rem] px-4 sm:px-8 lg:px-12">

        <p class="eyebrow eyebrow-lift text-canvas/50" data-reveal>{{ $eyebrow }}</p>

        <div class="mt-10 grid gap-12 lg:grid-cols-[1.7fr_1fr] lg:items-end lg:gap-16">

            <figure data-reveal>
                <blockquote class="display-statement max-w-4xl font-display font-medium">
                    <p>&ldquo;{{ $quote }}&rdquo;</p>
                </blockquote>

                <figcaption class="mt-10 flex items-center gap-4">
                    <img src="{{ $image }}" alt="{{ $imageAlt }}" width="112" height="112" class="size-14 rounded-full object-cover">
                    <span class="text-[15px]">
                        <span class="block font-display font-semibold">{{ $name }}</span>
                        <span class="block text-canvas/50">{{ $role }}</span>
                    </span>
                </figcaption>
            </figure>

            @if ($showMetric)
                <div class="border-t border-canvas/15 pt-8 lg:border-t-0 lg:border-l lg:pt-0 lg:pl-16 reveal-2" data-reveal>
                    <p class="display-figure font-display font-semibold text-accent-lift">{{ $metricValue }}</p>
                    <p class="mt-4 max-w-xs text-[15px] leading-relaxed text-canvas/60">{{ $metricLabel }}</p>

                    @if ($showLink)
                        <a href="{{ $linkUrl }}" class="mt-6 inline-flex items-center gap-2 font-display text-[15px] font-semibold text-canvas underline decoration-accent-lift decoration-2 underline-offset-[6px] transition-colors duration-200 hover:text-accent-lift">
                            {{ $linkText }}
                            <svg viewBox="0 0 20 20" class="size-4" fill="currentColor" aria-hidden="true"><path d="M4.5 10.75a.75.75 0 0 1 .75-.75h7.19l-2.72-2.72a.75.75 0 1 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06l2.72-2.72H5.25a.75.75 0 0 1-.75-.75Z"/></svg>
                        </a>
                    @endif
                </div>
            @endif

        </div>
    </div>
</section>
