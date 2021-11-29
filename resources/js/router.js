import Vue from 'vue';
import Router from 'vue-router';
import Welcome from './components/pages/Welcome';
import Portfolio from './components/pages/Portfolio';
import Skills from './components/pages/Skills';
import Contact from './components/pages/Contact';

Vue.use(Router)

const routes = [
    {
        path: '/',
        component: Welcome,
        name:'welcome',
    },
    {
        path: '/portfolio',
        component: Portfolio,
        name:'portfolio',
    },
    {
        path: '/skills',
        component: Skills,
        name:'skills',
    },
    {
        path: '/contact',
        component: Contact,
        name:'contact'
    }
]

export default new Router({
    mode: 'history',
    routes
});
