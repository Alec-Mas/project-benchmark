
require('./bootstrap');

window.Vue = require('vue');

//import VueRouter from 'vue-router';
//Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import ElementUI from 'element-ui'
import locale from 'element-ui/lib/locale/lang/en'
import 'element-ui/lib/theme-default/index.css'

Vue.use(ElementUI, { locale })
Vue.config.lang = 'en';

//global registration
import VueFormWizard from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
Vue.use(VueFormWizard)


//local registration
import {FormWizard, TabContent, WizardButton, WizardStep} from 'vue-form-wizard'
//component code
components: {
  FormWizard,
  TabContent,
  WizardButton,
  WizardStep
}

import App from './App.vue';
import Wizard from './components/Wizard.vue';
import Benchmark from './components/Benchmark.vue';
import Link from './components/Link.vue';

Vue.component('wizard', require('./components/Wizard.vue'));
Vue.component('unique-url', require('./components/Link.vue'));

/*
const routes = [
  {  path: '/', component: Wizard },
  { name: 'Benchmark', path: '/get-report/:code_id', component: Benchmark, props(route) {} },
  { name: 'Link', path: '/get-link/:code_id', component: Link }
];

const router = new VueRouter({ mode: 'history', routes: routes });
*/
new Vue ({
  el: '#app',
  /*render: h => h(Wizard)*/
});
