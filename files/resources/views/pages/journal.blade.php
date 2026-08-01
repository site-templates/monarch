<x-layouts.main title="Journal" description="Notes on scope, process, brand, and the projects we have shipped — written by the people who did the work.">

    <x-sections.page-header
        eyebrow="Journal"
        heading="Notes from inside the work."
        body="What we have changed our minds about, what a project actually cost, and the arguments we keep having. Written by whoever did the work, not by a marketing team."
    />

    <x-sections.blog-grid :posts="$posts"/>

    <x-sections.cta
        eyebrow="Stay close"
        heading="We write when there is something worth writing about."
        body="Roughly one entry a month, always about a real project. No newsletter, no sequence, no lead magnet — just the journal and an RSS-shaped promise to keep it honest."
        ctaText="Write to the studio"
        ctaLink="mailto:studio@monarch.design"
        callText="See the studio log"
        callLink="/changelog"
        showNote="0"
    />

</x-layouts.main>
