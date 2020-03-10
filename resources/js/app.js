/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueTelInput from 'vue-tel-input';
Vue.use(VueTelInput);

import ElementUI from 'element-ui';
import locale from "element-ui/src/locale/lang/es";
Vue.use(ElementUI, {locale});
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('formhome-component', require('./components/FormhomeComponent').default);
Vue.component('package-component', require('./components/PackageComponent').default);
Vue.component('formsearch-component', require('./components/FormsearchComponent').default);
Vue.component('menu-component', require('./components/MenuComponent').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
