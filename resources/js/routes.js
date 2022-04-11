import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);
import HomePage from "./components/pages/HomePage";
import ContactPage from "./components/pages/ContactPage";
import PostDetail from "./components/pages/PostDetail";

const router = new VueRouter({
    mode: "history",
    linkExactActiveClass: "active",
    routes: [{
            path: "/",
            component: HomePage
        },
        {
            path: "/contacts",
            component: ContactPage,
            name: "contacts",
        },
        {
            path: "/posts/:id",
            component: PostDetail,
            name: "post-detail",
        },
    ],
});

export default router;