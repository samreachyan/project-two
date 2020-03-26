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

    
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'Admin\CategoryController@getCategory');
        Route::post('/', 'Admin\CategoryController@postCategory');
        Route::get('/delete/{id}', 'Admin\CategoryController@getDelete');
        Route::get('/edit/{id}', 'Admin\CategoryController@editCategory');
        Route::post('/edit/{id}', 'Admin\CategoryController@PosteditCategory');
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'Admin\ProductController@getProduct');
        Route::get('/add', 'Admin\ProductController@getAddProduct');
        Route::post('/add', 'Admin\ProductController@postAddProduct');
        Route::get('/edit', 'Admin\ProductController@getEditProduct');

        Route::get('/status-update/{id}', 'Admin\ProductController@StatusUpdate');
    });

    Route::get('/client', 'Admin\ClientController@getClient');
    Route::get('/client/edit', 'Admin\ClientController@getEditClient');

    Route::get('/order', 'Admin\OrderController@getOrder');

    
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', 'Admin\UserController@getUser');
        Route::get('/add', 'Admin\UserController@getAddUser');
        Route::post('/add', 'Admin\UserController@postAddUser');
        Route::get('/edit/{id}', 'Admin\UserController@getEditUser');
        Route::post('/edit/{id}', 'Admin\UserController@postEditUser');
        Route::get('/delete/{id}', 'Admin\UserController@deleteUser');
    });

});