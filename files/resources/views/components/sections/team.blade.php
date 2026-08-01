@props([
    'eyebrow' => 'The studio',
    'heading' => 'Nine people. No account managers.',
    'body' => 'You work with the people doing the work, every week, for the length of the engagement.',
    'team' => [],
])
<!--
    The team row. Portraits are square and desaturate slightly until hovered,
    which keeps the row quiet against the bone canvas.
-->
<section class="py-20 sm:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-[104rem] px-4 sm:px-8 lg:px-12">

        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between" data-reveal>
            <div class="max-w-2xl">
                <p class="eyebrow text-ink">{{ $eyebrow }}</p>
                <h2 class="display-section mt-6 font-display font-semibold text-ink">{{ $heading }}</h2>
            </div>
            <p class="max-w-sm text-[1.0625rem] leading-relaxed text-muted">{{ $body }}</p>
        </div>

        <ul class="mt-14 grid gap-x-4 gap-y-10 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($team as $person)
                <li class="group" data-reveal>
                    <span class="block overflow-hidden rounded-2xl border border-line bg-raised">
                        <img src="{{ $person->image }}" alt="{{ $person->name }}" width="800" height="800" class="aspect-square size-full object-cover grayscale transition-all duration-500 group-hover:scale-[1.03] group-hover:grayscale-0">
                    </span>
                    <h3 class="mt-5 font-display text-lg font-semibold tracking-tight text-ink">{{ $person->name }}</h3>
                    <p class="mt-1 text-[15px] text-muted">{{ $person->role }}</p>
                    <p class="mt-3 text-[13px] leading-relaxed text-faint">{{ $person->note }}</p>
                </li>
            @endforeach
        </ul>

    </div>
</section>
