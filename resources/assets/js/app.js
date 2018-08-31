
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('desk', require('./components/Desk.vue'));
Vue.component('office', require('./components/Office.vue'));

import Main from './pages/Main.vue';
import Login from './pages/Login.vue';
import Logout from './pages/Logout.vue';

const router = new VueRouter({
    routes: [
        {path: '/', component: Main},
        {path: '/login', component: Login},
        {path: '/logout', component: Logout},
    ]
});

const app = new Vue({
    el: '#app',
    data: {
        user: null,
    },
    created() {
        let api_token = localStorage.getItem('api_token');

        console.log(api_token);

        if (api_token) {
            axios.defaults.headers.common['Authorization'] =
                'Bearer ' + api_token;

            if (!this.user) {
                axios.post('api/auth/me').then(response => {
                    this.user = response.data;
                });
            }
        }
    },
    methods: {
        saveUserInfo(event) {
            localStorage.setItem('api_token', event.token);
            axios.defaults.headers.common['Authorization'] =
                'Bearer ' + event.token;
            this.user = event.user;
        },
        logout() {
            if (this.user) {
                axios.post('api/auth/logout').then(response => {
                    this.user = null;
                    localStorage.removeItem('api_token');
                });
            }
        },
    },
    router,
});
