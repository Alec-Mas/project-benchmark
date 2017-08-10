
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('wizard', require('./components/wizard.vue'));

import ElementUI from 'element-ui'
import locale from 'element-ui/lib/locale/lang/en'
import 'element-ui/lib/theme-default/index.css'

Vue.use(ElementUI, { locale })

//global registration
import VueFormWizard from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
Vue.use(VueFormWizard)

//local registration
import {FormWizard, TabContent, WizardButton, WizardStep} from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
//component code
components: {
  FormWizard,
  TabContent,
  WizardButton,
  WizardStep
}

const app = new Vue({
    el: '#form'
});
