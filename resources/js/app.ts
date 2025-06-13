import '../css/app.css';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import type { DefineComponent } from 'vue';
import { createApp, h } from 'vue';
import { ZiggyVue } from 'ziggy-js';
import { initializeTheme } from './composables/useAppearance';

import AOS from 'aos';
import 'aos/dist/aos.css';

import { createApp } from 'vue'
import OurTeam from './pages/talant/Our_Team.vue'
import PartOfNashville from './pages/talant/Part-of-Nashville.vue'
import NewYork from './pages/talant/New-York.vue'
import ThreeSixtyDegree from './pages/talant/ThreeSixtyDegree.vue'

// Приложение для our-team
const ourTeamApp = createApp({})
ourTeamApp.component('our-team', OurTeam)
ourTeamApp.mount('#vue-team')

// Приложение для part-of-nashville
const partOfNashvilleApp = createApp({})
partOfNashvilleApp.component('part-of-nashville', PartOfNashville)
partOfNashvilleApp.mount('#vue-team2')

// Приложение для new-york
const NewYorkApp = createApp({})
NewYorkApp.component('new-york', NewYork)  //
NewYorkApp.mount('#vue-team3')

// Приложение для 360degree

const degreeApp = createApp({})
degreeApp.component('three-sixty-degree', ThreeSixtyDegree)
degreeApp.mount('#vue-team4')



AOS.init({
    duration: 1000,
    once: true,
});

// Extend ImportMeta interface for Vite...
declare module 'vite/client' {
    interface ImportMetaEnv {
        readonly VITE_APP_NAME: string;
        [key: string]: string | boolean | undefined;
    }

    interface ImportMeta {
        readonly env: ImportMetaEnv;
        readonly glob: <T>(pattern: string) => Record<string, () => Promise<T>>;
    }
}

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./pages/${name}.vue`, import.meta.glob<DefineComponent>('./pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});

// This will set light / dark mode on page load...
initializeTheme();
