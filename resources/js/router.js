import Vue from 'vue'
import Router from 'vue-router'
import dashboard from "./components/backend/dashboard";
import category from "./components/backend/category";
import article from "./components/backend/article";

Vue.use(Router)

export default new Router({
    routes: [
        {
            path: '/',
            name: 'dashboard',
            component: dashboard
        },
        {
            path: '/category',
            name: 'category',
            component: category
        },
        {
            path: '/article',
            name: 'article',
            component: article
        }
    ]
})
