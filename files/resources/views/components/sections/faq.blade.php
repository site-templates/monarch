@props([
    'eyebrow' => 'Questions',
    'heading' => 'The things every founder asks us in the first call.',
    'contactText' => 'Still wondering? Write to us.',
    'contactEmail' => 'studio@monarch.design',
    'showContact' => '1',
    'faqs' => [],
])
<!--
    Two columns: a heading that stays put while the accordion scrolls beside
    it. Built on native <details> so it works without JavaScript; the open
    animation is handled by ::details-content in site.css.
-->
<section class="border-t border-line py-20 sm:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-[104rem] px-4 sm:px-8 lg:px-12">
        <div class="grid gap-12 lg:grid-cols-[1fr_1.4fr] lg:gap-20">

            <div class="lg:sticky lg:top-32 lg:self-start" data-reveal>
                <p class="eyebrow text-ink">{{ $eyebrow }}</p>
                <h2 class="display-section mt-6 max-w-md font-display font-semibold text-ink">{{ $heading }}</h2>

                @if ($showContact)
                    <p class="mt-8 text-[15px] text-muted">{{ $contactText }}</p>
                    <a href="mailto:{{ $contactEmail }}" class="mt-2 inline-block font-display text-lg font-medium tracking-tight text-ink underline decoration-accent decoration-2 underline-offset-[6px] transition-colors duration-200 hover:text-accent-deep">{{ $contactEmail }}</a>
                @endif
            </div>

            <div class="border-t border-line">
                @foreach ($faqs as $faq)
                    <details class="faq-item group border-b border-line" data-reveal>
                        <summary class="flex cursor-pointer list-none items-start justify-between gap-6 py-6 text-left">
                            <span class="font-display text-lg font-semibold tracking-tight text-ink sm:text-xl">{{ $faq->question }}</span>
                            <span class="faq-plus mt-1 flex size-7 shrink-0 items-center justify-center rounded-full border border-line text-ink" aria-hidden="true">
                                <svg viewBox="0 0 20 20" class="size-3.5" fill="currentColor"><path d="M9.25 3.75a.75.75 0 0 1 1.5 0v5.5h5.5a.75.75 0 0 1 0 1.5h-5.5v5.5a.75.75 0 0 1-1.5 0v-5.5h-5.5a.75.75 0 0 1 0-1.5h5.5z"/></svg>
                            </span>
                        </summary>
                        <div class="pr-14 pb-7">
                            <p class="text-[1.0625rem] leading-relaxed text-muted">{{ $faq->answer }}</p>
                        </div>
                    </details>
                @endforeach
            </div>

        </div>
    </div>
</section>
