@props([
    'label' => 'Shipped with teams at',
    'logos' => [],
])
<!--
    The client strip. Names are set in the display face rather than dropped in
    as image files, so the row restyles with the theme and stays crisp at any
    size. main.js clones the row once so the marquee loops seamlessly.
-->
<section class="border-y border-line py-8">
    <div class="mx-auto flex w-full max-w-[104rem] flex-col gap-6 px-4 sm:px-8 lg:flex-row lg:items-center lg:gap-12 lg:px-12">

        <p class="shrink-0 text-xs font-semibold uppercase tracking-[0.14em] text-faint">{{ $label }}</p>

        <div class="marquee min-w-0 flex-1 overflow-hidden">
            <div class="marquee-track flex items-center" data-marquee-track>
                @foreach ($logos as $logo)
                    <span class="px-7 font-display text-xl font-medium tracking-tight whitespace-nowrap text-muted sm:text-2xl">{{ $logo->name }}</span>
                @endforeach
            </div>
        </div>

    </div>
</section>
