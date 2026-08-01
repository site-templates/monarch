@props([
    'releases' => [],
])
<!--
    The studio log. Each entry hangs off a sticky date in the left column, so
    the timeline reads down the page while the copy stays wide and legible.
    Tags are colour-coded by kind: shipped work takes the accent.
-->
<section class="pb-20 sm:pb-28 lg:pb-32">
    <div class="mx-auto w-full max-w-[104rem] px-4 sm:px-8 lg:px-12">
        @foreach ($releases as $release)
            <article class="grid gap-6 border-t border-line py-12 lg:grid-cols-[14rem_1fr] lg:gap-16 lg:py-16" data-reveal>

                <div class="lg:sticky lg:top-32 lg:self-start">
                    <p class="font-display text-lg font-semibold tracking-tight text-ink">{{ $release->date }}</p>
                    <p class="mt-1.5 text-[13px] text-faint">{{ $release->version }}</p>
                </div>

                <div class="max-w-3xl">
                    @if ($release->kind == 'shipped')
                        <span class="inline-block rounded-full bg-accent px-3 py-1 text-[13px] font-semibold text-accent-ink">{{ $release->tag }}</span>
                    @else
                        <span class="inline-block rounded-full border border-line px-3 py-1 text-[13px] font-semibold text-ink">{{ $release->tag }}</span>
                    @endif

                    <h2 class="mt-5 font-display text-2xl font-semibold tracking-tight text-ink sm:text-[1.75rem]">{{ $release->title }}</h2>
                    <p class="mt-4 text-[1.0625rem] leading-relaxed text-muted">{{ $release->description }}</p>

                    <ul class="mt-7 flex flex-col gap-3 border-t border-line pt-6">
                        <li class="flex items-start gap-3 text-[15px] leading-relaxed text-muted">
                            <span class="mt-2 size-1.5 shrink-0 rounded-full bg-accent" aria-hidden="true"></span>
                            {{ $release->pointOne }}
                        </li>
                        <li class="flex items-start gap-3 text-[15px] leading-relaxed text-muted">
                            <span class="mt-2 size-1.5 shrink-0 rounded-full bg-accent" aria-hidden="true"></span>
                            {{ $release->pointTwo }}
                        </li>
                        <li class="flex items-start gap-3 text-[15px] leading-relaxed text-muted">
                            <span class="mt-2 size-1.5 shrink-0 rounded-full bg-accent" aria-hidden="true"></span>
                            {{ $release->pointThree }}
                        </li>
                    </ul>
                </div>

            </article>
        @endforeach
    </div>
</section>
