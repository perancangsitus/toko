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
// adalah home fronend
Route::get('/', function () {
    return view('home.home');
});

Route::get('/blog', function () {
    return view('home.all');
});
Route::get('/blog/artikel', function () {
    return view('home.detailblog');
});

Route::get('/keranjang', function () {
    return view('home.keranjang');
});

Route::get('/produk', function () {
    return view('home.produk');
});

Route::get('/page', function () {
    return view('home.page');
});

Route::get('/allproduk', function () {
    return view('home.allproduk');
});


Auth::routes();
// route user

Route::get('/user', 'HomeController@index')->name('user');
Route::get('/user/logout', 'HomeController@logout')->name('user.logout');


//admin route 

Route::get('admin/home','AdminController@index');
Route::get('admin','Admin\LoginController@showLoginFrom')->name('admin.login');
Route::post('admin','Admin\LoginController@Login');
Route::get('admin/logout','AdminController@Logout')->name('admin.logout');

// katagory

Route::get('admin/category','CategoryController@Category')->name('category');


