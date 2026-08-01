<x-layouts.main title="Page not found" description="That page does not exist — but the rest of the studio does.">

    <section class="flex min-h-[80vh] items-center px-4 pt-36 pb-20 sm:px-8 lg:px-12">
        <div class="mx-auto w-full max-w-[104rem]">
            <p class="eyebrow text-ink">Error 404</p>

            <h1 class="display-hero mt-7 max-w-3xl font-display font-semibold text-ink">
                This page went the way of
                <span class="box-decoration-clone bg-accent px-2 text-accent-ink">the not-doing list.</span>
            </h1>

            <p class="mt-8 max-w-lg text-[1.0625rem] leading-relaxed text-muted">
                Either it moved, or it never existed and we scoped it out. Both happen here more than you would expect. The pages below definitely exist.
            </p>

            <div class="mt-10 flex flex-wrap items-center gap-3">
                <a href="/" class="rounded-full bg-ink px-7 py-4 text-[15px] font-semibold text-canvas transition-opacity duration-200 hover:opacity-85">Back to the studio</a>
                <a href="/journal" class="rounded-full border border-line bg-panel px-7 py-4 text-[15px] font-semibold text-ink transition-colors duration-200 hover:border-ink">Read the journal</a>
            </div>

            <ul class="mt-16 grid max-w-3xl gap-x-10 gap-y-4 border-t border-line pt-8 sm:grid-cols-2">
                @foreach ($site->menu_primary as $link)
                    <li>
                        <a href="{{ $link->url }}" class="mega-link inline-block font-display text-xl font-semibold uppercase tracking-tight text-ink transition-colors duration-200 hover:text-accent-deep">{{ $link->text }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

</x-layouts.main>
