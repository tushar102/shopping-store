<template>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <h1 class="my-4 text-center">Clothing Store</h1>
         </div>
         <div class="col-lg-12">
            <div class="row">
               <div class="col-lg-4 col-md-6 mb-4" v-for="product in products">
                  <div class="card h-100">
                     <a href="#"><img class="card-img-top"  v-bind:src="product.image.image" alt=""></a>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">{{ product.name }}</a>
                        </h4>
                        <h5>{{ product.variant.price }}</h5>
                        <router-link to="/product">Product</router-link>
                        <p class="card-text">{{ product.description }}</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <router-view></router-view>
   </div>
</template>

<script>
export default {
  name : "Front",
  data() {
    return {
      products: []
    }
  },

  mounted() {
    this.loadProducts();
  },

  methods : {
    loadProducts : function() {
      axios.get('/api/products')
      .then((response)=>{
        this.products = response.data
      })
      .catch();
    }
  }

}
</script>

<style lang="css" scoped>
</style>
