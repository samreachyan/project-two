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

Route::get('/login', 'Admin\LoginController@getLogin');
Route::post('/login', 'Admin\LoginController@postLogin');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Admin\IndexController@getIndex');

    Route::get('/category', 'Admin\CategoryController@getCategory');
    Route::post('/category', 'Admin\CategoryController@postCategory');

    Route::get('/product', 'Admin\ProductController@getProduct');
    Route::get('/product/add', 'Admin\ProductController@getAddProduct');
    Route::post('/product/add', 'Admin\ProductController@postAddProduct');
    Route::get('/product/edit', 'Admin\ProductController@getEditProduct');

    Route::get('/client', 'Admin\ClientController@getClient');
    Route::get('/client/add', 'Admin\ClientController@getAddClient');
    Route::get('/client/edit', 'Admin\ClientController@getEditClient');

    Route::get('/order', 'Admin\OrderController@getOrder');

    Route::get('/user', 'Admin\UserController@getUser');
    
});