import "./bootstrap";
import Vue from "vue";

import VueRouter from "vue-router";
Vue.use(VueRouter);

import { routes } from "./routes";

const router = new VueRouter({
    routes,
    mode: "history",
});

Vue.component("home", require("./components/HomeComponent.vue").default);

// creating a vue instance
const app = new Vue({
    el: "#app",
    router,
});
