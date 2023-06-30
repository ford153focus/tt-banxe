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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products', function() {
    return \App\Models\Product::all();
});

Route::get('products/{id}', function($id) {
    return \App\Models\Product::find($id);
});

Route::post('products', function(Request $request) {
    $data = $request->all();
    return \App\Models\Product::create([
        'name' => $data['name'],
        'description' => $data['description'],
        'price' => $data['price'],
    ]);
});

Route::put('products/{id}', function(Request $request, $id) {
    $article = \App\Models\Product::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('products/{id}', function($id) {
    \App\Models\Product::find($id)->delete();
    return 204;
});
