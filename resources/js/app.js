/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// import Vuetify from "../plugins/vuetify";

// import Vuetify from 'vuetify';
// Vue.use(Vuetify);
//

// import vsSelect from 'vuesax';
// import vsButton from 'vuesax';
import feather from 'feather-icons/dist/feather';
Vue.use(feather);
//
// Vue.use(vsButton);
// Vue.use(vsSelect);

import VueTelInput from 'vue-tel-input';
Vue.use(VueTelInput);
//
// import Vuelidate from 'vuelidate';
// Vue.use(Vuelidate);

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
Vue.component('searchpackage-component', require('./components/SearchpackageComponent').default);

Vue.component('search-package', require('./components/searchPackage.vue').default);
Vue.component('search-package-page', require('./components/searchPackagesPage').default);
Vue.component('search-list-package', require('./components/searchListPackage').default);
Vue.component('search-list-package-page', require('./components/searchListPackagePage').default);

Vue.component('destino-package', require('./components/destinoPackage.vue').default);
Vue.component('tiempo-package', require('./components/duracionPackage').default);
Vue.component('categoria-package', require('./components/categoriaPackage').default);
Vue.component('spinner', require('./components/Spinner').default);

Vue.component('pop-form', require('./components/popup/PopformComponent').default);

// Vue.component('formhome-component', require('./components/FormhomeComponent').default);
// Vue.component('package-component', require('./components/PackageComponent').default);
// Vue.component('formsearch-component', require('./components/FormsearchComponent').default);
// Vue.component('menu-component', require('./components/MenuComponent').default);
// Vue.component('parallaxhome-component', require('./components/ParallaxhomeComponent').default);
//
// Vue.component('forminquire-component', require('./components/FormInquireComponent').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

feather.replace();

const app = new Vue({
    el: '#app',
    // vuetify: new Vuetify(),
    // vuetify: Vuetify,
});
