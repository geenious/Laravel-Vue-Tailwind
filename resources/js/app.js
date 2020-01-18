import Vue from 'vue';
import './components';  //  Globally registers all vue components

import VueRouter from 'vue-router';
import routes from './routes';
Vue.use(VueRouter);

const app = new Vue ({
  el: '#app',
  router: new VueRouter(routes),
});