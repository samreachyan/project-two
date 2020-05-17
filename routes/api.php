<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Resources\Product as ProductResource;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;

use App\Model\Product;
use App\Model\User;
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

Route::get('/user', function () {
    return new UserResource(User::find(1));
});

Route::get('/users-link', function () {
    return new UserCollection(User::all());
});

Route::get('/users', function () {
    return UserResource::collection(User::all());
});

Route::get('/products', function () {
    return ProductResource::collection(Product::all());
});

Route::get('/get-products', function () {
    return ProductResource::collection(Product::all());
});

Route::get('/product/{id}', function ($id) {
    return new ProductResource(Product::find($id));
});