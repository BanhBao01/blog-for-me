/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');
import VueRouter from "vue-router";
Vue.use(VueRouter)
import router from './router'

import VueAlertify from "vue-alertify";
Vue.use(VueAlertify);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('left-side-menu',require('./components/include/left-side-menu.vue').default);
Vue.component('app',require('./App.vue').default);

const app = new Vue({
    el: '#app',
    router
});
