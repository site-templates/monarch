@props([
    'eyebrow' => 'Next',
    'heading' => 'Tell us what you are trying to launch.',
    'body' => 'One call, thirty minutes, no deck. If we are not the right studio for it we will say so and point you somewhere better.',
    'ctaText' => 'Start a project',
    'ctaLink' => 'mailto:studio@monarch.design',
    'callText' => 'Read the process',
    'callLink' => '/services',
    'note' => 'Booking new work from March 2026.',
    'showNote' => '1',
])
<!--
    The closing call to action — the one moment the accent owns a whole band of
    the page. Dark type on lime, which is the only legible direction for it.
-->
<section class="bg-accent py-20 text-accent-ink sm:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-[104rem] px-4 sm:px-8 lg:px-12">
        <div class="grid gap-10 lg:grid-cols-[1.5fr_1fr] lg:items-end lg:gap-20">

            <div data-reveal>
                <p class="eyebrow eyebrow-invert text-accent-ink/70">{{ $eyebrow }}</p>
                <h2 class="display-statement mt-6 max-w-3xl font-display font-semibold">{{ $heading }}</h2>
            </div>

            <div class="reveal-2" data-reveal>
                <p class="max-w-md text-[1.0625rem] leading-relaxed text-accent-ink/75">{{ $body }}</p>

                <div class="mt-8 flex flex-wrap items-center gap-3">
                    <a href="{{ $ctaLink }}" class="rounded-full bg-ink px-7 py-4 text-[15px] font-semibold text-canvas transition-opacity duration-200 hover:opacity-85">{{ $ctaText }}</a>
                    <a href="{{ $callLink }}" class="rounded-full border border-accent-ink/25 px-7 py-4 text-[15px] font-semibold text-accent-ink transition-colors duration-200 hover:border-accent-ink">{{ $callText }}</a>
                </div>

                @if ($showNote)
                    <p class="mt-6 text-[13px] font-medium text-accent-ink/60">{{ $note }}</p>
                @endif
            </div>

        </div>
    </div>
</section>
