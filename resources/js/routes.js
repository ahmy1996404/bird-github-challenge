let home = require("./components/HomeComponent.vue").default;
let points = require("./components/PointsComponent.vue").default;

export const routes = [
    {
        path: "/",
        component: home,
        name: "home",
        meta: {
            guest: true,
        },
    },
    {
        path: "/user-points",
        component: points,
        name: "points",
        meta: {
            secure: true,
        },
    },
];
