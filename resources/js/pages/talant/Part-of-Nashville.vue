<script setup lang="ts">

const people = [
        "Andrew Nacario",
        "Matt Ricatto",
        "Tom Hagan",
        "Lillian Giunta",
        "Ruben Noriega",
        "Sydney Chance",
        "Adriel Reyes",
        "Nolan Fontana",
        "Chris Amezquita",
        "Ethan Roth",
        "Tyler Hadzinsky"
    ]
</script>

<template>
    <div class="w-full max-w-[1000px] mx-auto grid grid-cols-2 space-y-8">
        <p
            v-for="(person, index) in people"
            :key="index"
            data-aos="zoom-in"
            class="font-bold text-gray-700 hover:text-white text-4xl text-center hover:bg-red-700 pr-16"
        >
            {{ person }}
        </p>
    </div>
</template>

<style scoped>

</style>