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



Route::match(['get','post'],'/admin','App\Http\Controllers\AdminController@login');
Route::get('/logout', 'App\Http\Controllers\AdminController@logout');

Route::group(['middleware' => ['auth']],function(){
Route::get('/admin/dashboard', 'App\Http\Controllers\AdminController@dashboard');
//Categories(Admin)
Route::match(['get','post'],'/admin/add-category','App\Http\Controllers\CategoryController@addCategory');
Route::get('/admin/view-categories', 'App\Http\Controllers\CategoryController@viewCategories');
Route::match(['get','post'], '/admin/edit-category/{id}','App\Http\Controllers\CategoryController@editCategory');
Route::match(['get','post'], '/admin/delete-category/{id}','App\Http\Controllers\CategoryController@deleteCategory');

 //Products(Admin)
 Route::match(['get','post'],'/admin/add-product','App\Http\Controllers\ProductsController@addProduct');
 Route::get('/admin/view-products', 'App\Http\Controllers\ProductsController@viewProducts');
 Route::match(['get','post'], '/admin/edit-product/{id}','App\Http\Controllers\ProductsController@editProduct');
 Route::match(['get','post'], '/admin/delete-product/{id}','App\Http\Controllers\ProductsController@deleteProduct');
});

Route::get('/','App\Http\Controllers\IndexController@index');

// Category Listing Page
Route::get('/products/{url}','App\Http\Controllers\ProductsController@products');

//Product Detail Page
Route::get('product/{id}','App\Http\Controllers\ProductsController@product');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
