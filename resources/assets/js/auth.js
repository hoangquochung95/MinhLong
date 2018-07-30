
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

Vue.use(VeeValidate);
Vue.use(VueRouter)
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('support-email', require('./components/contact/supportEmail.vue'));
Vue.component('highlights-item-shop', require('./components/shop/highlights-item-shop.vue'));
Vue.component('view-tab-category', require('./components/shop/viewTabCategory.vue'));
Vue.component('luxury-item-shop', require('./components/shop/luxury-item-shop.vue'));
Vue.component('logout', require('./components/auth/logout.vue'));

// ROUTER IN REGISTER/LOGIN PAGE
import login from './components/auth/login.vue';
import register from './components/auth/register.vue';

const routes=[
    {
        path:'/',
        component: register
    },
    {
        name:'register',
        path:'/register',
        component: register
    },
    {
        path:'/login',
        component:login
    }
];

const router=new VueRouter({
    routes,
});
const app = new Vue({
    el: '#app',
    router
});