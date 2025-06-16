<script setup lang="ts">

const sections = [
    {
        title: 'Cultural & Consumer Perspectives',
        text: `Our Cultural & Consumer Insights team identifies key macro trends  that define mindset and behaviors
        today. We help brands add to the cultural conversation by understanding and reaching a growing, diverse,
        and values-oriented audience.`
    },
    {
        title: 'Insights & Analytics',
        text: `Our Insights & Analytics experts use proprietary tools and leverage data to inform strategic
        decision-making for our clients. We use research as the foundation of strategy, and our diversified set of
        products and services position our clients to derive the most value from partnerships and activation.`
    },
    {
        title: 'Partnership & Talent Strategy',
        text: `We work closely with our clients to advise on partnerships across the property, media, and talent space.
        Our industry intel and connectivity give us the “art” while our Insights and Analytics department provides the
         “science” with measured data to back our strategic partner recommendations.`
    },
    {
        title: 'Creative',
        text: `We use deep insights and collaboration to deliver ground-breaking, and culturally relevant creative
        thinking and implementation. Our Creative Lab delivers thoughtful and compelling positioning to inform campaign
        work that connects with consumers, while our Design Studio delivers design and asset creation across all
        platforms from digital to IRL.`
    },
    {
        title: 'Experiential',
        text: `Our Experiential experts are in the business of connecting people and championing human interaction.
        The world has changed, and we have all adjusted to a new reality — including how we design and execute
        frictionless experiences regardless of time, place, or space. We offer new and intuitive strategies for brands
        to show up in more meaningful and purposeful ways across the largest and most exclusive entertainment and sports
        events in the world.`
    },
    {
        title: 'Content & Digital Strategy',
        text: `We help brands navigate and capitalize on the shift in content creation, digital experiences, and
        consumption habits driven by big cultural moments and global trends through influencer discovery, digital and
        content strategy, amplification, distribution, and execution.`
    },
    {
        title: 'Social Impact',
        text: `Social impact efforts have never been more relevant, or in greater demand. Building on our 25 years of
        experience, we remain committed to our mission: creating critical impact solutions that drive business.
        We specialize in strategies that help brands define and amplify what they want to stand for and ensure that
        their values are aligned with the impact they want to have on the world. `
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