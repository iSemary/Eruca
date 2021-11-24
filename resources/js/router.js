import Vue from 'vue';
import Router from 'vue-router';
import Portfolio from './components/pages/Portfolio';
import Skills from './components/pages/Skills';

Vue.use(Router)

const routes = [
    {
        path: '/portfolio',
        component: Portfolio
    },
    {
        path: '/skills',
        component: Skills
    }
]

export default new Router({
    mode: 'history',
    routes
});
