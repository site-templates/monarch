@props([
    'title' => 'Journal entry',
    'description' => '',
    'category' => 'Notes',
    'dateFormatted' => '',
    'readTime' => '',
    'author' => 'Monarch',
    'image' => '',
    'imageAlt' => '',
    'slug' => '',
    'entries' => [],
])
<!doctype html>
<html lang="en" class="scroll-smooth {{ $site->theme->appearance_class ?? '' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} · {{ $site->name }}</title>
    <meta name="description" content="{{ $description }}">

    <link rel="icon" href="/favicon.svg" type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{ $site->theme->fonts_url ?? 'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=DM+Sans:wght@400;500;600&display=swap' }}" rel="stylesheet">

    @vite(['resources/css/theme.css', 'resources/css/site.css'])

    <script>document.documentElement.classList.add('js')</script>
    <script src="/js/main.js" defer></script>
</head>
<body class="min-h-dvh bg-canvas font-sans text-ink antialiased" data-instant-navigation>

    <!-- The menu capsule floats over the page; each opening section carries its own top padding. -->
    <x-nav :primary="$site->menu_primary" :secondary="$site->menu_secondary"/>

    <main class="relative">
        <article>

            <header class="px-4 pt-36 sm:px-8 sm:pt-44 lg:px-12 lg:pt-52">
                <div class="mx-auto w-full max-w-3xl">
                    <a href="/journal" class="inline-flex items-center gap-2 text-[13px] font-semibold text-muted transition-colors duration-200 hover:text-ink">
                        <svg viewBox="0 0 20 20" class="size-4" fill="currentColor" aria-hidden="true"><path d="M15.5 10.75a.75.75 0 0 0-.75-.75H7.56l2.72-2.72a.75.75 0 1 0-1.06-1.06l-4 4a.75.75 0 0 0 0 1.06l4 4a.75.75 0 1 0 1.06-1.06l-2.72-2.72h7.19a.75.75 0 0 0 .75-.75Z"/></svg>
                        Journal
                    </a>

                    <div class="mt-8 flex flex-wrap items-center gap-3 text-[13px] font-medium text-faint">
                        <span class="rounded-full bg-accent px-3 py-1 text-accent-ink">{{ $category }}</span>
                        <span>{{ $dateFormatted }}</span>
                        <span aria-hidden="true">·</span>
                        <span>{{ $readTime }}</span>
                    </div>

                    <h1 class="display-statement mt-6 font-display font-semibold text-ink">{{ $title }}</h1>
                    <p class="mt-6 text-[15px] text-muted">By {{ $author }}</p>
                </div>
            </header>

            @if ($image)
                <div class="mt-14 px-4 sm:px-8 lg:px-12">
                    <div class="mx-auto w-full max-w-5xl overflow-hidden rounded-3xl border border-line">
                        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1600" height="1000" class="aspect-[16/10] size-full object-cover">
                    </div>
                </div>
            @endif

            <div class="px-4 py-16 sm:px-8 lg:px-12 lg:py-24">
                <div class="prose mx-auto">
                    {{ $slot }}
                </div>
            </div>

        </article>

        @if ($entries)
        <section class="border-t border-line py-20 sm:py-24">
            <div class="mx-auto w-full max-w-[104rem] px-4 sm:px-8 lg:px-12">
                <h2 class="font-display text-2xl font-semibold tracking-tight text-ink">More from the journal</h2>

                <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($entries as $entry)
                        @if ($entry->slug != $slug)
                            <a href="{{ $entry->link }}" class="lift group flex flex-col rounded-3xl border border-line bg-panel p-7">
                                <span class="flex items-center gap-3 text-[13px] font-medium text-faint">
                                    <span class="rounded-full border border-line px-3 py-1 text-ink">{{ $entry->category }}</span>
                                    <span>{{ $entry->dateFormatted }}</span>
                                </span>
                                <span class="mt-5 block font-display text-xl font-semibold tracking-tight text-ink">{{ $entry->title }}</span>
                                <span class="mt-3 block text-[15px] leading-relaxed text-muted">{{ $entry->excerpt }}</span>
                                <span class="mt-auto flex items-center gap-2 pt-7 text-[13px] font-medium text-ink">
                                    Read entry
                                    <svg viewBox="0 0 20 20" class="size-4 transition-transform duration-300 group-hover:translate-x-1" fill="currentColor" aria-hidden="true"><path d="M4.5 10.75a.75.75 0 0 1 .75-.75h7.19l-2.72-2.72a.75.75 0 1 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06l2.72-2.72H5.25a.75.75 0 0 1-.75-.75Z"/></svg>
                                </span>
                            </a>
                        @endif
                        @break($loop->iteration == 4)
                    @endforeach
                </div>
            </div>
        </section>
        @endif

    </main>

    <x-footer :sitemap="$site->menu_primary" :elsewhere="$site->menu_secondary" :social="$site->social_links"/>

</body>
</html>
