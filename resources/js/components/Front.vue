<template>

  <div class="container">

    <div class="row">

      <div class="col-lg-12">

        <h1 class="my-4 text-center">Shopping Store</h1>


      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-12">


        <div class="row">
          @foreach($products as $product)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{ $product->name }}</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">{{ $product->description }}</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  
</template>

<script>
export default {
}
</script>

<style lang="css" scoped>
</style>
