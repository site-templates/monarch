@props([
    'serviceDetails' => [],
])
<!--
    The services in full. Each discipline gets a two-column row — copy on one
    side, a deliverables panel on the other — and every second row swaps sides
    so the page zig-zags instead of marching. The panel is drawn in markup, so
    it costs nothing and restyles with the palette.
-->
<section class="pb-8">
    <div class="mx-auto w-full max-w-[104rem] px-4 sm:px-8 lg:px-12">
        @foreach ($serviceDetails as $service)
            <article class="grid gap-10 border-t border-line py-16 lg:grid-cols-2 lg:gap-20 lg:py-24" data-reveal>

                <div @if ($loop->even) class="lg:order-2" @endif>
                    <p class="font-display text-sm font-semibold text-accent-deep">{{ $service->number }}</p>
                    <h2 class="display-section mt-5 max-w-md font-display font-semibold text-ink">{{ $service->title }}</h2>
                    <p class="mt-6 max-w-lg text-[1.0625rem] leading-relaxed text-muted">{{ $service->description }}</p>

                    <dl class="mt-10 flex flex-wrap gap-x-12 gap-y-5">
                        <div>
                            <dt class="text-xs font-semibold uppercase tracking-[0.14em] text-faint">Typical length</dt>
                            <dd class="mt-2 font-display text-lg font-medium tracking-tight text-ink">{{ $service->duration }}</dd>
                        </div>
                        <div>
                            <dt class="text-xs font-semibold uppercase tracking-[0.14em] text-faint">Starts at</dt>
                            <dd class="mt-2 font-display text-lg font-medium tracking-tight text-ink">{{ $service->price }}</dd>
                        </div>
                    </dl>
                </div>

                <div class="rounded-3xl border border-line bg-panel p-8 sm:p-10">
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-faint">{{ $service->panelLabel }}</p>
                    <ul class="mt-7 flex flex-col gap-5">
                        <li class="flex items-start gap-4 border-b border-line pb-5">
                            <span class="mt-1 flex size-5 shrink-0 items-center justify-center rounded-full bg-accent text-accent-ink" aria-hidden="true"><svg viewBox="0 0 20 20" class="size-3" fill="currentColor"><path d="M16.7 5.3a1 1 0 0 1 0 1.4l-7.5 7.5a1 1 0 0 1-1.4 0l-3.5-3.5a1 1 0 1 1 1.4-1.4l2.8 2.79 6.8-6.79a1 1 0 0 1 1.4 0Z"/></svg></span>
                            <span class="text-[15px] leading-relaxed text-ink">{{ $service->pointOne }}</span>
                        </li>
                        <li class="flex items-start gap-4 border-b border-line pb-5">
                            <span class="mt-1 flex size-5 shrink-0 items-center justify-center rounded-full bg-accent text-accent-ink" aria-hidden="true"><svg viewBox="0 0 20 20" class="size-3" fill="currentColor"><path d="M16.7 5.3a1 1 0 0 1 0 1.4l-7.5 7.5a1 1 0 0 1-1.4 0l-3.5-3.5a1 1 0 1 1 1.4-1.4l2.8 2.79 6.8-6.79a1 1 0 0 1 1.4 0Z"/></svg></span>
                            <span class="text-[15px] leading-relaxed text-ink">{{ $service->pointTwo }}</span>
                        </li>
                        <li class="flex items-start gap-4 border-b border-line pb-5">
                            <span class="mt-1 flex size-5 shrink-0 items-center justify-center rounded-full bg-accent text-accent-ink" aria-hidden="true"><svg viewBox="0 0 20 20" class="size-3" fill="currentColor"><path d="M16.7 5.3a1 1 0 0 1 0 1.4l-7.5 7.5a1 1 0 0 1-1.4 0l-3.5-3.5a1 1 0 1 1 1.4-1.4l2.8 2.79 6.8-6.79a1 1 0 0 1 1.4 0Z"/></svg></span>
                            <span class="text-[15px] leading-relaxed text-ink">{{ $service->pointThree }}</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="mt-1 flex size-5 shrink-0 items-center justify-center rounded-full bg-accent text-accent-ink" aria-hidden="true"><svg viewBox="0 0 20 20" class="size-3" fill="currentColor"><path d="M16.7 5.3a1 1 0 0 1 0 1.4l-7.5 7.5a1 1 0 0 1-1.4 0l-3.5-3.5a1 1 0 1 1 1.4-1.4l2.8 2.79 6.8-6.79a1 1 0 0 1 1.4 0Z"/></svg></span>
                            <span class="text-[15px] leading-relaxed text-ink">{{ $service->pointFour }}</span>
                        </li>
                    </ul>
                </div>

            </article>
        @endforeach
    </div>
</section>
