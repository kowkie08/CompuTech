<?php

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
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/register', function () {
    return view('product');
});
Route::post('/signup', 'UserController@register');
Route::get('/login', function () {
    return view('login');
});
Route::post('/signin', 'UserController@login');

//supplier
Route::get('/supplier', 'SupplierController@getSuppliers');
Route::post('/supplier/add', 'SupplierController@add');
Route::get('/supplier/archive/{id}', 'SupplierController@archive');\

//product
Route::get('/product/add', function () {
    return view('addproduct');
});

Route::post('/product/insert', 'ProductController@add');

Route::get('/product', 'ProductController@getProducts');