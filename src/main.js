// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import VModal from 'vue-js-modal'
import VueLoading from 'vuejs-loading-plugin'

Vue.config.productionTip = false
Vue.use(VModal,{
	   height: 'auto',
   dynamic: true,
});
Vue.use(VueLoading, {
  dark: true,text: 'Loading ...',classes: ['loading'] })

new Vue({

  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})

