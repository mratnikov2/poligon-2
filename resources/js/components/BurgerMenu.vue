<script setup lang="ts">
import { ref } from 'vue'

const isOpen = ref(false)

function toggleMenu() {
    isOpen.value = !isOpen.value
}
</script>

<template>
    <div>
        <!-- Бургер справа -->
        <header class="fixed top-0 right-0 z-50 p-4">
            <button @click="toggleMenu" class="text-white focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </header>

        <!-- Меню -->
        <div v-if="isOpen" class="w-full max-w-[2560px] h-screen fixed inset-0 bg-black z-40 overflow-auto">
            <div class="p-28">
                <div class="text-white hover:text-[#8B0000] italic font-extrabold text-[120px] leading-[20px]">
                    CFF
                </div>
            </div>
            <ul class="flex flex-col items-center justify-center space-y-2 pr-[40%] mt-[10%]">
                <li class="w-40 text-left text-[#D8BFD8] font-bold hover:text-[#E6E6FA] text-[50px] text-nowrap">
                    <a href="/talant">For Talent</a>
                </li>
                <li class="w-40 text-left text-[#D8BFD8] font-bold hover:text-[#E6E6FA] text-[50px] text-nowrap">
                    <a href="/brands">For Brands</a>
                </li>
                <li class="w-40 text-left text-[#D8BFD8] font-bold hover:text-[#E6E6FA] text-[50px] text-nowrap">
                    <a href="/enterprise">For Enterprise</a>
                </li>
            </ul>
            <ul class="flex flex-col items-center justify-center space-y-2 pr-[40%] mt-[10%]">
                <li class="w-40 text-left text-[#D8BFD8] font-bold hover:text-[#E6E6FA] text-lg">
                    <a href="/about">About</a>
                </li>
                <li class="w-40 text-left text-[#D8BFD8] font-bold hover:text-[#E6E6FA] text-lg">
                    <a href="/careers">Careers</a>
                </li>
                <li class="w-40 text-left text-[#D8BFD8] font-bold hover:text-[#E6E6FA] text-lg">
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</template>

<style scoped>
</style>
