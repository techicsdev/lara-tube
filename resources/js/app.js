
require('./bootstrap');

window.Vue = require('vue');


Vue.config.ignoredElements = ['video-js']

// new Vue({
// 	route,
// 	...App
// })

const app = new Vue({
    el: '#app'
});
