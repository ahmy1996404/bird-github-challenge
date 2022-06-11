import "./bootstrap";
import Vue from "vue";
import { BootstrapVue, IconsPlugin } from "bootstrap-vue";

// Import Bootstrap and BootstrapVue CSS files (order is important)
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-vue/dist/bootstrap-vue.css";

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue);
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin);

import moment from "moment";

Vue.filter("formatDate", function (value) {
    if (value) {
        return moment(String(value)).format("MMMM,DD,YYYY");
    }
});

import VueRouter from "vue-router";
Vue.use(VueRouter);

import store from "./store";

import { routes } from "./routes";

const router = new VueRouter({
    routes,
    mode: "history",
});

router.beforeEach((to, from, next) => {
    if (to.matched.some((record) => record.meta.secure)) {
        if (!store.state.userName) {
            next({
                path: "/",
            });
        } else {
            next();
        }
    } else {
        next();
    }
});

// creating a vue instance
const app = new Vue({
    el: "#app",
    router,
    store,
});
