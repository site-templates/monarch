<x-layouts.main title="About" description="Nine people in Lisbon who design and build software, two engagements at a time, in six-week blocks.">

    <x-sections.page-header
        eyebrow="About"
        heading="A studio built to finish things."
        body="Monarch started in 2017 with two people and one project. Nine years and forty-one launches later the shape is the same: a small team, a fixed scope, and a date we do not move."
        showMeta="1"
        metaOneLabel="Founded"
        metaOneValue="2017"
        metaTwoLabel="Team"
        metaTwoValue="Nine people"
        metaThreeLabel="Based"
        metaThreeValue="Lisbon · Remote"
    />

    <x-sections.stats :stats="$stats" showHeading="0"/>

    <x-sections.statement
        eyebrow="Why we exist"
        heading="Every studio says it ships. Almost none of them will tell you what they refused to build."
        body="We think the interesting part of this work is the editing, not the making. Anyone can add a feature. Deciding which forty to leave out — and being able to explain each one — is the job."
        linkText="See how we work"
        linkUrl="/services"
        showGrid="0"
    />

    <x-sections.values :values="$values"/>

    <x-sections.team :team="$team"/>

    <x-sections.timeline :milestones="$milestones"/>

    <x-sections.cta
        eyebrow="Join us"
        heading="We hire about once a year, and it is usually now."
        body="We are looking for one designer who can write and one engineer who can say no. If that is recognisably you, send something you made and a paragraph on why."
        ctaText="Write to the studio"
        ctaLink="mailto:studio@monarch.design"
        callText="Read the journal"
        callLink="/journal"
        note="Open applications, all year."
    />

</x-layouts.main>
