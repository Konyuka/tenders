require('./bootstrap');

import Vue from 'vue';

import { InertiaApp } from '@inertiajs/inertia-vue';
import { InertiaForm } from 'laravel-jetstream';
// import { InertiaProgress } from '@inertiajs/progress'
// InertiaProgress.init()
import PortalVue from 'portal-vue';
import store from './store';

// import { SetupCalendar } from 'v-calendar';
// app.use(SetupCalendar, {})

Vue.mixin({ methods: { route } });
Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);
// Vue.use(moment);

const app = document.getElementById('app');

new Vue({
    store,
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
    }),
}).$mount(app);
