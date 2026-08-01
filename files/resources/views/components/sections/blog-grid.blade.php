@props([
    'posts' => [],
])
<!--
    The full journal index. Every entry is one wide editorial row — cover on
    the left, copy on the right — which suits a short, deliberate archive far
    better than a grid of small cards.
-->
<section class="pb-20 sm:pb-28 lg:pb-32">
    <div class="mx-auto w-full max-w-[104rem] px-4 sm:px-8 lg:px-12">
        @foreach ($posts as $post)
            <a href="{{ $post->link }}" class="group grid gap-6 border-t border-line py-10 transition-colors duration-300 hover:border-ink lg:grid-cols-[22rem_1fr] lg:gap-14 lg:py-12" data-reveal>

                <span class="block overflow-hidden rounded-2xl border border-line">
                    <img src="{{ $post->image }}" alt="{{ $post->imageAlt }}" width="1200" height="800" class="aspect-[3/2] size-full object-cover transition-transform duration-500 group-hover:scale-[1.04]">
                </span>

                <span class="flex flex-col justify-center">
                    <span class="flex flex-wrap items-center gap-3 text-[13px] font-medium text-faint">
                        <span class="rounded-full border border-line px-3 py-1 text-ink">{{ $post->category }}</span>
                        <span>{{ $post->dateFormatted }}</span>
                        <span aria-hidden="true">·</span>
                        <span>{{ $post->readTime }}</span>
                    </span>

                    <span class="mt-5 block max-w-2xl font-display text-2xl font-semibold tracking-tight text-ink sm:text-[2rem] sm:leading-tight">{{ $post->title }}</span>
                    <span class="mt-4 block max-w-2xl text-[1.0625rem] leading-relaxed text-muted">{{ $post->excerpt }}</span>

                    <span class="mt-7 flex items-center gap-2 text-[15px] font-semibold text-ink">
                        Read entry
                        <svg viewBox="0 0 20 20" class="size-4 transition-transform duration-300 group-hover:translate-x-1" fill="currentColor" aria-hidden="true"><path d="M4.5 10.75a.75.75 0 0 1 .75-.75h7.19l-2.72-2.72a.75.75 0 1 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06l2.72-2.72H5.25a.75.75 0 0 1-.75-.75Z"/></svg>
                    </span>
                </span>

            </a>
        @endforeach
    </div>
</section>
