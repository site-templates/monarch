@props([
    'eyebrow' => 'Introduction',
    'heading' => 'Most software fails long before it ships. It fails in the month nobody decided what it was for.',
    'body' => 'We start every engagement by cutting the idea down to the one thing it has to do, then build outward from there. Fewer screens, fewer meetings, and a v1 that a real customer can actually use.',
    'showLink' => '1',
    'linkText' => 'How we work',
    'linkUrl' => '/services',
    'showGrid' => '1',
])
<!--
    The statement: a narrow eyebrow column on the left, then oversized display
    copy set in the wide right column. Deliberately offset so the page breaks
    out of centred symmetry right after the hero.
-->
<section class="relative overflow-hidden py-20 sm:py-28 lg:py-36">
    @if ($showGrid)
        <div class="dot-grid pointer-events-none absolute inset-x-0 top-0 h-72" aria-hidden="true"></div>
    @endif

    <div class="relative mx-auto w-full max-w-[104rem] px-4 sm:px-8 lg:px-12">
        <div class="grid gap-10 lg:grid-cols-[13rem_1fr] lg:gap-16">

            <p class="eyebrow text-ink lg:pt-4" data-reveal>{{ $eyebrow }}</p>

            <div>
                <h2 class="display-statement max-w-4xl font-display font-semibold text-ink" data-reveal>{{ $heading }}</h2>

                <div class="mt-10 max-w-md lg:mt-14 lg:ml-auto lg:max-w-sm reveal-2" data-reveal>
                    <p class="text-[1.0625rem] leading-relaxed text-muted">{{ $body }}</p>

                    @if ($showLink)
                        <a href="{{ $linkUrl }}" class="mt-6 inline-flex items-center gap-2 font-display text-[15px] font-semibold text-ink underline decoration-accent decoration-2 underline-offset-[6px] transition-colors duration-200 hover:text-accent-deep">
                            {{ $linkText }}
                            <svg viewBox="0 0 20 20" class="size-4" fill="currentColor" aria-hidden="true"><path d="M4.5 10.75a.75.75 0 0 1 .75-.75h7.19l-2.72-2.72a.75.75 0 1 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06l2.72-2.72H5.25a.75.75 0 0 1-.75-.75Z"/></svg>
                        </a>
                    @endif
                </div>
            </div>

        </div>
    </div>
</section>
