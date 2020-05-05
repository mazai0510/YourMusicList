
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import Vuetify from 'vuetify'
import axios from 'axios'
import 'vuetify/dist/vuetify.min.css'
import router from './router/index'
Vue.use(Vuetify);
Vue.use(axios);
Vue.component('App', require('./App.vue').default);

const app = new Vue({
    el: '#App',
    vuetify: new Vuetify(),
    router,
});
