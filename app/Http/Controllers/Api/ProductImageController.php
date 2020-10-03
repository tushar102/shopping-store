<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProductImage;

class ProductImageController extends Controller
{
    public function uploadImage(Request $request)
    {
      $filename = $request->file->getClientOriginalName();
      $request->file->storeAs('images', $filename, 'public');
      $filepath = '/storage/images/'.$filename;
      ProductImage::updateOrCreate(['product_id' => $request->product_id, 'image' => $filepath ]);

      return response()->json([
          "message" => "image uploaded"
      ], 201);

    }
}
