require("./bootstrap");
window.Vue = require("vue").default;
import router from "./router";
import { fas } from '@fortawesome/free-solid-svg-icons';
import { far } from '@fortawesome/free-regular-svg-icons';
import { fab } from '@fortawesome/free-brands-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { library } from '@fortawesome/fontawesome-svg-core'

library.add(fab, far, fas);
Vue.component('fa', FontAwesomeIcon)

Vue.component("app", require("./app.vue").default);
Vue.component("header-look", require("./components/HeaderLook.vue").default);
Vue.component("footer-look", require("./components/FooterLook.vue").default);

const app = new Vue({
    el: "#app",
    router,
});
