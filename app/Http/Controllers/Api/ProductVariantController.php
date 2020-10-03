<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProductVariant;

class ProductVariantController extends Controller
{
    public function store(Request $request)
    {
        $productVar = ProductVariant::updateOrCreate([
          'product_id' =>  $request->product_id,
          'name'       =>  $request->name,
          'price'      =>  $request->price
        ]);

        return response()->json([
            "message" => "product variant created"
        ], 201);
    }
}
