import Home from './components/Home.vue';
import Mystery from './components/Mystery.vue';

export default {
  mode: 'history',
  routes: [
    {
      path: '/',
      component: Home
    },
    {
      path: '/mw',
      component: Mystery
    }
  ]
}