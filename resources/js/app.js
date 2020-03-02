
require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'

window.Vue.vue(VueRouter);

import route from './router'

Vue.config.ignoredElements = ['video-js']

// new Vue({
// 	route,
// 	...App
// })

const app = new Vue({
    el: '#app'
});
