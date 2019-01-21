/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
import Toasted from 'vue-toasted';
import Vuetify from 'vuetify'
import VModal from 'vue-js-modal'

Vue.use(VModal);

window.Vue.use(VueRouter);
window.Vue.use(Toasted);
window.Vue.use(Vuetify, { iconfont: 'fa' });

Vue.use(require('vue-shortkey'));
Vue.use(VModal);
Vue.use(require('vue-moment'));
Vue.use(require('vue-cookies'));

// Event (singular) conflicts with vue-shortkey
window.Events = new window.Vue();

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.config.productionTip = false;
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import router from './routes';

const app = new Vue({
    el: '#app',
    router
});