require('./bootstrap');
window.Vue = require('vue').default;
import router from './router'

Vue.component('MainApp', require('./components/mainapp.vue').default)
Vue.component('header-look', require('./components/HeaderLook.vue').default)
const app = new Vue({
    el: '#app',
    router
});
