<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


  Route::get('/products', 'Api\ProductController@getAllProducts');
  Route::post('/product', 'Api\ProductController@store');
  Route::get('product/{id}','Api\ProductController@getProduct');
  Route::post('/product-image','Api\ProductImageController@uploadImage');
  Route::post('/product-variant','Api\ProductVariantController@store');
