@props(['title' => 'Home', 'description' => '', 'showFooter' => '1'])
<!doctype html>
<html lang="en" class="scroll-smooth {{ $site->theme->appearance_class ?? '' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} · {{ $site->name }}</title>
    <meta name="description" content="{{ $description }}">

    <link rel="icon" href="/favicon.svg" type="image/svg+xml">

    <!-- Space Grotesk sets every heading; DM Sans carries the body copy. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{ $site->theme->fonts_url ?? 'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=DM+Sans:wght@400;500;600&display=swap' }}" rel="stylesheet">

    <!-- Loads Tailwind, then the theme tokens, then the aliases and motion in site.css -->
    @vite(['resources/css/theme.css', 'resources/css/site.css'])

    <!-- Flag JS support before first paint so scroll reveals never flash (see main.js) -->
    <script>document.documentElement.classList.add('js')</script>
    <script src="/js/main.js" defer></script>
</head>
<body class="min-h-dvh bg-canvas font-sans text-ink antialiased">

    <!-- The menu capsule floats over the page; each opening section carries its own top padding. -->
    <x-nav :primary="$site->menu_primary" :secondary="$site->menu_secondary"/>

    <main class="relative">
        {{ $slot }}
    </main>

    @if ($showFooter)
        <x-footer :sitemap="$site->menu_primary" :elsewhere="$site->menu_secondary" :social="$site->social_links"/>
    @endif

</body>
</html>
