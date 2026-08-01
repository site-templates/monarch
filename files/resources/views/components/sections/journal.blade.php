@props([
    'eyebrow' => 'Journal',
    'heading' => 'Notes from inside the work.',
    'linkText' => 'All entries',
    'linkUrl' => '/journal',
    'posts' => [],
])
<!--
    The three most recent entries. The first runs wide with its cover image and
    the other two sit beside it as text rows, so the block reads as an edited
    page rather than three matching cards.
-->
<section class="border-t border-line py-20 sm:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-[104rem] px-4 sm:px-8 lg:px-12">

        <div class="flex flex-wrap items-end justify-between gap-6" data-reveal>
            <div>
                <p class="eyebrow text-ink">{{ $eyebrow }}</p>
                <h2 class="display-section mt-6 font-display font-semibold text-ink">{{ $heading }}</h2>
            </div>
            <a href="{{ $linkUrl }}" class="inline-flex items-center gap-2 rounded-full border border-line bg-panel px-6 py-3 text-[15px] font-semibold text-ink transition-colors duration-200 hover:border-ink">
                {{ $linkText }}
                <svg viewBox="0 0 20 20" class="size-4" fill="currentColor" aria-hidden="true"><path d="M4.5 10.75a.75.75 0 0 1 .75-.75h7.19l-2.72-2.72a.75.75 0 1 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06l2.72-2.72H5.25a.75.75 0 0 1-.75-.75Z"/></svg>
            </a>
        </div>

        <div class="mt-14 grid gap-4 lg:grid-cols-3">
            @foreach ($posts as $post)
                @if ($loop->first)
                    <a href="{{ $post->link }}" class="lift group flex flex-col overflow-hidden rounded-3xl border border-line bg-panel lg:col-span-2 lg:row-span-2" data-reveal>
                        <span class="relative block aspect-[16/10] overflow-hidden">
                            <img src="{{ $post->image }}" alt="{{ $post->imageAlt }}" width="1200" height="750" class="size-full object-cover transition-transform duration-500 group-hover:scale-[1.03]">
                        </span>
                        <span class="flex flex-1 flex-col p-7 sm:p-9">
                            <span class="flex items-center gap-3 text-[13px] font-medium text-faint">
                                <span class="rounded-full bg-accent px-3 py-1 text-accent-ink">{{ $post->category }}</span>
                                <span>{{ $post->dateFormatted }}</span>
                            </span>
                            <span class="mt-5 block font-display text-2xl font-semibold tracking-tight text-ink sm:text-[1.75rem]">{{ $post->title }}</span>
                            <span class="mt-3 block max-w-xl text-[15px] leading-relaxed text-muted">{{ $post->excerpt }}</span>
                            <span class="mt-6 block text-[13px] text-faint">{{ $post->readTime }}</span>
                        </span>
                    </a>
                @else
                    <a href="{{ $post->link }}" class="lift group flex flex-col rounded-3xl border border-line bg-panel p-7" data-reveal>
                        <span class="flex items-center gap-3 text-[13px] font-medium text-faint">
                            <span class="rounded-full border border-line px-3 py-1 text-ink">{{ $post->category }}</span>
                            <span>{{ $post->dateFormatted }}</span>
                        </span>
                        <span class="mt-5 block font-display text-xl font-semibold tracking-tight text-ink">{{ $post->title }}</span>
                        <span class="mt-3 block text-[15px] leading-relaxed text-muted">{{ $post->excerpt }}</span>
                        <span class="mt-auto flex items-center gap-2 pt-7 text-[13px] font-medium text-ink">
                            Read entry
                            <svg viewBox="0 0 20 20" class="size-4 transition-transform duration-300 group-hover:translate-x-1" fill="currentColor" aria-hidden="true"><path d="M4.5 10.75a.75.75 0 0 1 .75-.75h7.19l-2.72-2.72a.75.75 0 1 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06l2.72-2.72H5.25a.75.75 0 0 1-.75-.75Z"/></svg>
                        </span>
                    </a>
                @endif
                @break($loop->iteration == 3)
            @endforeach
        </div>

    </div>
</section>
