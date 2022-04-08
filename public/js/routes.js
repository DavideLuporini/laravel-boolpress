import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import HomePage from './components/pages/HomePage';
import ContactPage from './components/pages/ContactPage';

const router = new VueRouter({
    mode: 'history',
    routes: [

        {
            path: '/',
            component: HomePage
        },
        {
            path: '/contacts',
            component: ContactPage,
        },
    ]

});
export default router;