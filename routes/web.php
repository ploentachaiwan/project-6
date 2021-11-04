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
    return view('welcome');
});
//admin
Route::get('admin/admin/index','Admin\AdminController@index')->name('admin.index');

//producte
Route::get('admin/product/index','Admin\ProductController@index')->name('product.index');

//typeproducte
Route::get('admin/typeproduct/index','Admin\TypeproductContrller@index')->name('typeproduct.index');

//user
Route::get('admin/user/index','Admin\UserContrller@index')->name('user.index');

//homepage
Route::get('admin/homepage/index','Admin\HomepageContrller@index')->name('homepage.index');

//contents
Route::get('admin/contents/index','Admin\ContentsContrller@index')->name('contents.index');

//background
Route::get('admin/background/index','Admin\BackgroundContrller@index')->name('background.index');



Auth::routes();

Route::get('/about', 'HomeController@about');

Route::get('/home', 'HomeController@index')->name('home');
