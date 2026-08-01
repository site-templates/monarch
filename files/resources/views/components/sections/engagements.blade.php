@props([
    'eyebrow' => 'Working together',
    'heading' => 'Three ways to start.',
    'body' => 'Every engagement is fixed-scope and fixed-price. No hourly billing, no change orders, no surprises in month three.',
    'engagements' => [],
])
<!--
    The engagement models. Three shapes, so three columns is the honest layout
    here — the middle one is marked as the usual choice and inverts to ink.
-->
<section class="border-t border-line py-20 sm:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-[104rem] px-4 sm:px-8 lg:px-12">

        <div class="max-w-2xl" data-reveal>
            <p class="eyebrow text-ink">{{ $eyebrow }}</p>
            <h2 class="display-section mt-6 font-display font-semibold text-ink">{{ $heading }}</h2>
            <p class="mt-6 text-[1.0625rem] leading-relaxed text-muted">{{ $body }}</p>
        </div>

        <div class="mt-14 grid gap-4 lg:grid-cols-3">
            @foreach ($engagements as $tier)
                @if ($tier->featured)
                    <div class="flex flex-col rounded-3xl bg-ink p-8 text-canvas sm:p-10" data-reveal>
                        <div class="flex items-center justify-between gap-4">
                            <h3 class="font-display text-xl font-semibold tracking-tight">{{ $tier->name }}</h3>
                            <span class="rounded-full bg-accent px-3 py-1 text-[13px] font-semibold text-accent-ink">{{ $tier->badge }}</span>
                        </div>
                        <p class="mt-4 text-[15px] leading-relaxed text-canvas/60">{{ $tier->description }}</p>
                        <p class="mt-8 font-display text-4xl font-semibold tracking-tight text-accent-lift">{{ $tier->price }}</p>
                        <p class="mt-2 text-[13px] text-canvas/50">{{ $tier->priceNote }}</p>

                        <ul class="mt-8 flex flex-col gap-3 border-t border-canvas/15 pt-8 text-[15px] text-canvas/75">
                            <li>{{ $tier->pointOne }}</li>
                            <li>{{ $tier->pointTwo }}</li>
                            <li>{{ $tier->pointThree }}</li>
                            <li>{{ $tier->pointFour }}</li>
                        </ul>

                        <a href="{{ $tier->ctaLink }}" class="mt-10 rounded-full bg-accent px-6 py-4 text-center text-[15px] font-semibold text-accent-ink transition-colors duration-200 hover:bg-accent-deep">{{ $tier->ctaText }}</a>
                    </div>
                @else
                    <div class="lift flex flex-col rounded-3xl border border-line bg-panel p-8 sm:p-10" data-reveal>
                        <h3 class="font-display text-xl font-semibold tracking-tight text-ink">{{ $tier->name }}</h3>
                        <p class="mt-4 text-[15px] leading-relaxed text-muted">{{ $tier->description }}</p>
                        <p class="mt-8 font-display text-4xl font-semibold tracking-tight text-ink">{{ $tier->price }}</p>
                        <p class="mt-2 text-[13px] text-faint">{{ $tier->priceNote }}</p>

                        <ul class="mt-8 flex flex-col gap-3 border-t border-line pt-8 text-[15px] text-muted">
                            <li>{{ $tier->pointOne }}</li>
                            <li>{{ $tier->pointTwo }}</li>
                            <li>{{ $tier->pointThree }}</li>
                            <li>{{ $tier->pointFour }}</li>
                        </ul>

                        <a href="{{ $tier->ctaLink }}" class="mt-10 rounded-full border border-line px-6 py-4 text-center text-[15px] font-semibold text-ink transition-colors duration-200 hover:border-ink">{{ $tier->ctaText }}</a>
                    </div>
                @endif
            @endforeach
        </div>

    </div>
</section>
