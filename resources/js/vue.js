
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';
import VueYoutube from 'vue-youtube';


require('./bootstrap');

window.Vue = require('vue');
Vue.use(VueYoutube);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('wrapper', require('./components/Wrapper.vue'));
Vue.component('container', require('./components/Container.vue'));

Vue.component('introduction', require('./components/Introduction.vue'));
Vue.component('explanation', require('./components/Explanation.vue'));
Vue.component('transition', require('./components/Transition.vue'));
Vue.component('brand-title', require('./components/BrandTitle.vue'));
Vue.component('card', require('./components/Card.vue'));
Vue.component('logo-animation', require('./components/LogoAnimation.vue'));

const app = new Vue({
    el: '#vue'
});