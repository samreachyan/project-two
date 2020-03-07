<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.admin');
});

Route::get('/login', function () {
    return view('admin.login');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Admin\IndexController@getIndex');

    Route::get('/category', 'Admin\CategoryController@getIndex');

    Route::get('/product', 'Admin\ProductController@getProduct');

    Route::get('/order', 'Admin\OrderController@getOrder');

    Route::get('/user', 'Admin\UserController@getUser');
    
});