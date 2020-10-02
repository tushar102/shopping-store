<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function getAllProducts()
     {
      $products = Product::get()->toJson(JSON_PRETTY_PRINT);
      return response($products, 200);
    }
}
