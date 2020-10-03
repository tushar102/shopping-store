<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $products = Product::with('image')->get()->toJson(JSON_PRETTY_PRINT);
        return response($products, 200);
    }

    public function store(Request $request)
    {
        $product = Product::updateOrCreate([
          'name'          =>  $request->name,
          'description'   =>  $request->description
        ]);

        return response()->json([
            "message" => "product created"
        ], 201);
    }

    public function getProduct($id)
     {
         if (Product::where('id', $id)->exists()) {
             $product = Product::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
             return response($product, 200);
           } else {
           return response()->json([
             "message" => "Product not found"
           ], 404);
         }
     }
}
