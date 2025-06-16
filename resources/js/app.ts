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
import WhatWeDo from '@/pages/brands/WhatWeDo.vue';


const apps = [
    // Part of talant
    { id: '#vue-team', name: 'our-team', component: OurTeam },
    { id: '#vue-team2', name: 'part-of-nashville', component: PartOfNashville },
    { id: '#vue-team3', name: 'new-york', component: NewYork },
    { id: '#vue-team4', name: 'three-sixty-degree', component: ThreeSixtyDegree },
    // Part for brands
    { id: '#brand1', name: 'WhatWeDo', component: WhatWeDo },
]

apps.forEach(({ id, name, component }) => {
    const app = createApp({})
    app.component(name, component)
    app.mount(id)
})

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
