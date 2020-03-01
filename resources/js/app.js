
require('./bootstrap');

window.Vue = require('vue');

Vue.config.ignoredElements = ['video-js']

const app = new Vue({
    el: '#app'
});
