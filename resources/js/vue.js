
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';
import YoutubeVue from 'youtube-vue'
// import VueYoutube from 'vue-youtube';

require('./bootstrap');

window.Vue = require('vue');
Vue.use(YoutubeVue);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('wrapper', require('./components/Wrapper.vue'));
Vue.component('container', require('./components/Container.vue'));

Vue.component('introduction', require('./components/Introduction.vue'));
Vue.component('call-to-action', require('./components/CallToAction.vue'));
Vue.component('quick-search', require('./components/QuickSearch.vue'));
Vue.component('page-transition', require('./components/PageTransition.vue'));

Vue.component('explanation', require('./components/Explanation.vue'));
Vue.component('jjab-form', require('./components/BrandForm.vue'));
Vue.component('employee', require('./components/Employee.vue'));
Vue.component('transition', require('./components/Transition.vue'));
Vue.component('brand-title', require('./components/BrandTitle.vue'));
Vue.component('brand-button', require('./components/BrandButton.vue'));
Vue.component('card', require('./components/Card.vue'));
Vue.component('logo-animation', require('./components/LogoAnimation.vue'));

Vue.component('phone', require('./components/Phone.vue'));
Vue.component('brand-menu', require('./components/BrandMenu.vue'));

const app = new Vue({
    el: '#vue',
    components: {
        YoutubeVue
    },
    data : {
        video_id:"PABUl_EX_hw", loop:0, autoplay:1
   }
});
