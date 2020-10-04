import Vue from 'vue';
import VueRouter from 'vue-router';
import SingleProduct from "./components/SingleProduct";

Vue.use(VueRouter);


export default new VueRouter({
  routes : [
    { path:'/product',component: SingleProduct },
  ],
  mode: 'history'
})
