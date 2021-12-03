require("./bootstrap");
window.Vue = require("vue").default;
// Vue Router
import router from "./router";
// Vue Fontawesome
import { fas } from "@fortawesome/free-solid-svg-icons";
import { far } from "@fortawesome/free-regular-svg-icons";
import { fab } from "@fortawesome/free-brands-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { library } from "@fortawesome/fontawesome-svg-core";
// Vue Apollo
import { ApolloClient } from "apollo-client";
import { HttpLink } from "apollo-link-http";
import { InMemoryCache } from "apollo-cache-inmemory";
import VueApollo from "vue-apollo";

// Fontawesome Add
library.add(fab, far, fas);
Vue.component("fa", FontAwesomeIcon);

const httpLink = new HttpLink({
    // URL to graphql server, you should use an absolute URL here
    uri: "http://127.0.0.1:8000/graphql",
});
// create the apollo client
const apolloClient = new ApolloClient({
    link: httpLink,
    cache: new InMemoryCache(),
});
const apolloProvider = new VueApollo({
        defaultClient: apolloClient
    })
    // install the vue plugin 
Vue.use(VueApollo);

// Require Components
Vue.component("app", require("./app.vue").default);
Vue.component("header-look", require("./components/HeaderLook.vue").default);
Vue.component("footer-look", require("./components/FooterLook.vue").default);

const app = new Vue({
    el: "#app",
    router,
    apolloProvider,
});