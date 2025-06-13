<script setup lang="ts">

const sections = [
    {
        title: 'Marketing & Endorsements',
        text: `CAA's in-house branding team helps clients build well-rounded off-field strategies
    by partnering with some of the largest and most influential companies activating
    in sports today. From trading card, memorabilia and equipment deals to larger national
    advertisements and commercials, CAA clients are at the forefront of capitalizing off their
    image and likeness.`
    },
    {
        title: 'Media',
        text: `In today's landscape, media is ever-present, powerful and a major influencer.
    CAA Baseball has the in-house expertise to guide clients through both traditional
    and social media, and has been a trailblazer in the usage of social media and graphic
    design to help players share their own narratives in creative and thought-provoking ways.`
    },
    {
        title: 'Philanthropy',
        text: `With CAA's help and guidance, baseball clients have collectively raised more than $6.8 million
    for their respective charities in the past decade alone. And with over 50 Roberto Clemente
    Award nominations, baseball clients have been honored for their work not only on the field,
    but off it. The CAA Baseball team works closely with CAA Foundation to expand clients' philanthropic
    efforts.`
    },
    {
        title: 'Major League Concierge',
        text: `Whether it's booking a honeymoon, having a car shipped or providing insider access to a CAA-connected
    show or event, CAA Baseball's in-house concierge service is on call to handle off-the-field needs — so
    that clients are always able to focus on the field.`
    }
]

</script>

<template>
    <div class="w-2/3" data-aos="fade-right">
        <div v-for="(section, index) in sections" :key="index" class="mt-12">
            <p class="text-left text-4xl leading-tight font-bold">
                {{ section.title }}
            </p>
            <p class="text-left text-xl leading-snug mt-12 whitespace-pre-line">
                {{ section.text }}
            </p>
        </div>
    </div>
</template>

<style scoped>

</style>