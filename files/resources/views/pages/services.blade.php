<x-layouts.main title="Services" description="Strategy, brand, product design, and engineering — fixed scope, fixed price, six-week blocks.">

    <x-sections.page-header
        eyebrow="Services"
        heading="Four disciplines. One fixed price."
        body="We quote whole outcomes, not hours. Every engagement below is a fixed scope at a fixed price, agreed before we start and invoiced in two parts."
    />

    <x-sections.service-rows :serviceDetails="$serviceDetails"/>

    <x-sections.process :steps="$steps"/>

    <x-sections.engagements :engagements="$engagements"/>

    <x-sections.faq :faqs="$faqs"/>

    <x-sections.cta
        heading="Bring us the version that scares you."
        body="Thirty minutes, no deck, no discovery invoice. If we are not the right studio for what you are building, we will say so on the call and point you at someone better."
    />

</x-layouts.main>
