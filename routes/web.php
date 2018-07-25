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
Route::get('/product',[
    'uses' => 'ProductController@getUserProducts',
    'as' => 'product.index'
]);
Route::get('/checkout',[
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout'
]);
Route::post('/checkout',[
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout'
]);

Route::post('/signup', 'UserController@register');
Route::get('/login', function () {
    return view('login');
});
Route::get('/logout',[
    'uses' => 'UserController@logout',
    'as' => 'logout'
]);
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



Route::get('/logout', 'UserController@logout');

Route::get('admin/product', 'ProductController@getProducts');

//user
Route::get('/add-to-cart/{id}',[
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);
Route::get('/cart',[
    'uses' => 'ProductController@getCart',
    'as' => 'product.Cart'
]);

//order
Route::get('/orders', 'OrderController@getOrders');
Route::get('/order/{id}', 'OrderDetailController@getOrderDetails');


//users
Route::get('/users', 'UserController@getUsers');