@props([
    'eyebrow' => 'About',
    'heading' => 'A studio built to finish things.',
    'body' => '',
    'showMeta' => '0',
    'metaOneLabel' => 'Founded',
    'metaOneValue' => '2017',
    'metaTwoLabel' => 'Team',
    'metaTwoValue' => 'Nine people',
    'metaThreeLabel' => 'Based',
    'metaThreeValue' => 'Lisbon · Remote',
])
<!--
    The opening block on every page but the home page. It carries the top
    padding the fixed capsule needs, and can expose three small facts under the
    heading when a page benefits from them.
-->
<section class="px-4 pt-36 pb-14 sm:px-8 sm:pt-44 lg:px-12 lg:pt-52 lg:pb-20">
    <div class="mx-auto w-full max-w-[104rem]">

        <p class="eyebrow text-ink" data-reveal>{{ $eyebrow }}</p>
        <h1 class="display-hero mt-7 max-w-4xl font-display font-semibold text-ink reveal-1" data-reveal>{{ $heading }}</h1>

        @if ($body)
            <p class="mt-8 max-w-xl text-[1.0625rem] leading-relaxed text-muted reveal-2" data-reveal>{{ $body }}</p>
        @endif

        @if ($showMeta)
            <dl class="mt-12 flex flex-wrap gap-x-14 gap-y-6 border-t border-line pt-8 reveal-3" data-reveal>
                <div>
                    <dt class="text-xs font-semibold uppercase tracking-[0.14em] text-faint">{{ $metaOneLabel }}</dt>
                    <dd class="mt-2 font-display text-lg font-medium tracking-tight text-ink">{{ $metaOneValue }}</dd>
                </div>
                <div>
                    <dt class="text-xs font-semibold uppercase tracking-[0.14em] text-faint">{{ $metaTwoLabel }}</dt>
                    <dd class="mt-2 font-display text-lg font-medium tracking-tight text-ink">{{ $metaTwoValue }}</dd>
                </div>
                <div>
                    <dt class="text-xs font-semibold uppercase tracking-[0.14em] text-faint">{{ $metaThreeLabel }}</dt>
                    <dd class="mt-2 font-display text-lg font-medium tracking-tight text-ink">{{ $metaThreeValue }}</dd>
                </div>
            </dl>
        @endif

    </div>
</section>
