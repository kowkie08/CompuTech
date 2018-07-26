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
    return view('about');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/product',[
    'uses' => 'ProductController@getUserProducts',
    'as' => 'product.index'
]);

Route::get('/product/hot',[
    'uses' => 'ProductController@getHotProducts',
    'as' => 'product.hot'
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
Route::get('/sup/add', function () {
    return view('addsupplier');
});
Route::get('/supplier', 'SupplierController@getSuppliers');
Route::post('/admin/supplier/add', 'SupplierController@add');
Route::get('/supplier/archive/{id}', 'SupplierController@archive');
Route::get('/supplier/{id}', 'SupplierController@getSupplierByID');
Route::post('/supplier/edit', 'SupplierController@edit');

//product
Route::get('/product/add', function () {
    return view('addproduct');
});

Route::post('/admin/product/insert', 'ProductController@add');

Route::post('/product/edit', 'ProductController@edit');

Route::get('/product/{id}', 'ProductController@getProductById');

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
Route::get('/admin/orders', 'OrderController@getOrders');
Route::get('/order/{id}', 'OrderDetailController@getOrderDetails');


//users
Route::get('/admin/users', 'UserController@getUsers');
Route::get('/admin/users/{id}', 'UserController@getUserByID');
Route::post('/admin/user/edit', 'UserController@edit');
Route::get('/admin/user/add', function () {
    return view('addadministrator');
});

Route::post('/admin/signup', 'UserController@addAdmin');


Route::get('/admin/customers', 'UserController@getCustomers');
Route::get('/admin/customer/{id}', 'UserController@getCustomerByID');
Route::post('/admin/customer/edit', 'UserController@editCustomer');
