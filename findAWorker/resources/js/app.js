require('./bootstrap');

window.Vue = require('vue');

import ExampleComponent from './components/ExampleComponent.vue';
Vue.component('example-component', ExampleComponent);

const app = new Vue({
    el: '#app'
});
