require('./bootstrap');
window.Vue = require('vue');

import router from './router';



// Vue.use(VueRouter);
//
// const routes = [
//   {path:'/product',component:SingleProduct}
// ]
// const router = new VueRouter({
//   routes
// })

Vue.component('front-page', require('./components/Front.vue').default);

const app = new Vue({
  el: '#app',
  router
});
