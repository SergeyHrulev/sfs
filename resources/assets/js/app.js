
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
var VueResource = require('vue-resource');
var VueAsyncData = require('vue-async-data');
var VueMaskedInput = require('vue-masked-input');

Vue.use(VueResource);
Vue.use(VueAsyncData);
Vue.use(VueMaskedInput);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

$(document).ready(function () {
    $('.button-collapse').sideNav({
        menuWidth: 300, // Default is 300
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
    });
    $('.parallax').parallax();
    $('.carousel.carousel-slider').carousel({
        fullWidth: true
    });
    $('.modal').modal();
});

Vue.component('example', require('./components/Example.vue'));
//Vue.component('masked-input', require('vue-masked-input'));
import MaskedInput from 'vue-masked-input'

const app = new Vue({
    el: '#app',
    
    directives: {
        'masked-input': VueMaskedInput
    }
});
