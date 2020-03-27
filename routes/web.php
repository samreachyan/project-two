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

Route::get('/', 'Admin\IndexController@getIndex');

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

    Route::group(['prefix' => 'comment'], function () {
        Route::get('/', 'Admin\CommentController@getCommnet');
        Route::get('/delete/{id}', 'Admin\CommentController@deleteComment');
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'Admin\ProductController@getProduct');
        Route::get('/add', 'Admin\ProductController@getAddProduct');
        Route::post('/add', 'Admin\ProductController@postAddProduct');
        Route::get('/edit/{id}', 'Admin\ProductController@getEditProduct');
        Route::post('/edit/{id}', 'Admin\ProductController@postEditProduct');
        Route::get('/delete/{id}', 'Admin\ProductController@deleteProduct');

        Route::get('/status-update/{id}', 'Admin\ProductController@StatusUpdate');
    });

    Route::get('/client', 'Admin\ClientController@getClient');
    Route::get('/client/edit', 'Admin\ClientController@getEditClient');

    
    Route::group(['prefix' => 'order'], function () {
        Route::get('/', 'Admin\OrderController@getOrder');
        Route::get('/proceed', 'Admin\OrderController@getProceed');
        Route::get('/proceed/{id}', 'Admin\OrderController@getProceedDetail');
        Route::get('/detail/{id}', 'Admin\OrderController@getDetailProduct');
        Route::get('/comfirme/{id}', 'Admin\OrderController@getComfirme');
    });

    
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', 'Admin\UserController@getUser');
        Route::get('/add', 'Admin\UserController@getAddUser');
        Route::post('/add', 'Admin\UserController@postAddUser');
        Route::get('/edit/{id}', 'Admin\UserController@getEditUser');
        Route::post('/edit/{id}', 'Admin\UserController@postEditUser');
        Route::get('/delete/{id}', 'Admin\UserController@deleteUser');
    });

});