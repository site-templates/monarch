<x-layouts.main title="Changelog" description="The Monarch studio log — what shipped, what changed, and what we are booking, month by month.">

    <x-sections.page-header
        eyebrow="Studio log"
        heading="What shipped, month by month."
        body="Most studios publish case studies once a year. We publish the log instead — every launch, every change to how we work, and an honest note on what we are booking."
    />

    <x-sections.changelog-list :releases="$releases"/>

    <x-sections.cta
        eyebrow="Next"
        heading="There is room in the log for what you are building."
        body="Two engagements at a time means the calendar is real. If you want a slot this spring, the conversation should start now."
        callText="Read the journal"
        callLink="/journal"
    />

</x-layouts.main>
