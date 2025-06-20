<script setup lang="ts">
const sections = [
    {
        city: 'Los Angeles',
        text1: `2000 Avenue of the Stars
                Los Angeles, CA 90067
                t: +1 424 288 2000 f: +1 424 288 2900`,
        text2: `10250 Constellation Blvd.<br>
                Los Angeles, CA 90067`,
    },
    {
        city: 'New York',
        text1: `405 Lexington Avenue, 22nd Floor
                New York, NY 10174
                t: +1 212 277 9000 f: +1 212 277 9099`,
        text2: `65 E. 55th St. <br>
                New York, NY 10022`,
    },
    {
        city: 'Nashville',
        text1: `401 Commerce Street, Penthouse
                Nashville, TN 37219
                t: +1 615 383 8787 f: +1 615 383 4937`,
        text2: ``,
    },
    {
        city: `Washington <br> D.C.`,
        text1: `1500 K Street NW
                Washington DC, 20005
                t: +1 771 444 5301`,
        text2: ``,
    },
    {
        city: `London`,
        text1: `12 Hammersmith Grove
                London W6 7AP
                United Kingdom
                t: +44 20 8846 3000 f: +44 20 8846 3090`,
        text2: `101 New Cavendish Street <br>
                First Floor North <br>
                London W1W 6XH <br>
                United Kingdom <br>
                t: +44 (0) 20 8396 4700`,
    },
    {
        city: `Beijing`,
        text1: `5/F ,World Financial Center
                1E 3rd Ring Middle Rd, Guomao,
                Chaoyang, Beijing, China, 100020`,
        text2: ``,
    },
    {
        city: `Shanghai`,
        text1: `Unit 2704-2705,
                Tower 3
                Shanghai Jing An Kerry Center
                1228 Yan An Middle Road
                Shanghai, China 200040`,
        text2: ``,
    },
    {
        city: `Singapore`,
        text1: `88 Market Street, 40th Floor
                Singapore 048948`,
        text2: ``,
    },
    {
        city: `Atlanta`,
        text1: `3560 Lenox Road, Suite 1525
                Atlanta, GA 30326
                t: +1 404 816 2722`,
        text2: ``,
    },
    {
        city: `Miami`,
        text1: `1688 Meridian Ave , Suite 340
                Miami Beach, FL 33139
                t: +1 305 538 7535`,
        text2: ``,
    },
    {
        city: `Chicago`,
        text1: `444 N. Michigan Avenue, Suite 3540
                Chicago, IL 60611
                t: +1 312 242 2700`,
        text2: ``,
    },
    {
        city: `Denver`,
        text1: `CAA ICON
                5075 S. Syracuse Street, Suite 700
                Denver, CO 80237
                t: +1 303.557.3700`,
        text2: ``,
    },
    {
        city: `Jacksonville`,
        text1: `3652 South Third Street, Suite 200
                Jacksonville Beach, FL 32250
                t: +1 904 339 0435 f: +1 904 758 0562`,
        text2: ``,
    },
    {
        city: `Stockholm`,
        text1: `CAA Sports Sweden AB
                Riggvagen 8
                178 51 Ekerö
                Sweden
                t: +46 7 0721 6112`,
        text2: ``,
    },
    {
        city: `Munich`,
        text1: `Infanteriestr. 11A, Haus C
                80797 Munich
                Germany
                t: +49 89 26 209 7900`,
        text2: ``,
    },
    {
        city: `Geneva`,
        text1: `CAA Eleven Sàrl
                Allée de la Petite Prairie 8-10
                1260 Nyon
                Switzerland
                t: +41 22 308 51 51`,
        text2: ``,
    },
];
</script>

<template>
    <div class="h-screen w-full max-w-[2560px] bg-white">
        <div class="mx-auto mt-20 grid w-full max-w-[800px] grid-cols-2"
             v-for="(office, index)
             in sections"
             :key="index"
        >
            <div class="text-left text-5xl font-bold whitespace-nowrap text-red-700" data-aos="zoom-in">
                <div v-html="office.city"></div>
            </div>
            <div>
                <p v-html="office.text1.replace(/\n/g, '<br>')" data-aos="zoom-in"></p>
                <p class="mt-2" v-html="office.text2" data-aos="zoom-in"></p>
            </div>
        </div>
    </div>
</template>

<style scoped></style>