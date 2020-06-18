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

Route::get('admin/home','AdminController@index')->name('dashbrodamin');
Route::get('admin','Admin\LoginController@showLoginFrom')->name('admin.login');
Route::post('admin','Admin\LoginController@Login');
Route::get('admin/logout','AdminController@Logout')->name('admin.logout');

// katagory

Route::get('admin/category','CategoryController@Category')->name('category');
Route::post('admin/store/category','CategoryController@storecategory')->name('store.category');
Route::get('dellet/category/{id}','CategoryController@Delletcategory');
Route::get('edit/category/{id}','CategoryController@editcategory');
Route::post('update/category/{id}','CategoryController@updatecategory');


//brands
Route::get('admin/brand', 'BrandController@brand')->name('brands');
Route::post('admin/store/brand', 'BrandController@storebrand')->name('store.brand');
Route::get('dellet/brand/{id}', 'BrandController@deletebrand');
Route::get('edit/brand/{id}', 'BrandController@EditBrand');
Route::post('update/brand/{id}','BrandController@updatebrand');

//sub

Route::get('admin/sub/category', 'SubCategoryController@subcategories')->name('sub.categories');
Route::post('admin/store/subcat', 'SubCategoryController@storesubcat')->name('store.subcategory');
Route::get('delete/subcategory/{id}', 'SubCategoryController@DeleteSubcat');
Route::get('edit/subcategory/{id}', 'SubCategoryController@EditSubcat');
Route::post('update/subcategory/{id}', 'SubCategoryController@updateSubcat');

// coupon
Route::get('admin/sub/coupon', 'CouponController@coupon')->name('admin.coupon');
Route::post('admin/store/coupon', 'CouponController@storecoupon')->name('store.coupon');
Route::get('delete/coupon/{id}', 'CouponController@deletecoupon');
Route::get('edit/coupon/{id}', 'CouponController@editcoupon');
Route::post('update/coupon/{id}', 'CouponController@updatecoupon');

//newslaters
Route::get('admin/newslater', 'CouponController@newslater')->name('admin.newslater');
Route::get('delete/sub/{id}', 'CouponController@deletesub');


//subcategory
Route::get('get/subcategory/{category_id}', 'ProductController@getsubcat');


//product
Route::get('admin/product/all', 'ProductController@index')->name('all.product');
Route::get('admin/product/add', 'ProductController@create')->name('add.product');
Route::post('admin/store/product', 'ProductController@store')->name('store.product');

Route::get('inactive/product/{id}', 'ProductController@inactive');
Route::get('active/product/{id}', 'ProductController@active');
Route::get('delete/product/{id}', 'ProductController@deleteproduct');

Route::get('view/product/{id}', 'ProductController@viewproduct');
Route::get('edit/product/{id}', 'ProductController@editproduct');

Route::post('update/product/withoutphoto/{id}', 'ProductController@updatewithoutphoto');
Route::post('update/product/photo/{id}', 'ProductController@updateproductphoto');














