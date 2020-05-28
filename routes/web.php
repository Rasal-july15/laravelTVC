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

//FrontEnd
Route::get('/','pagescontroller\HomeController@home');


//Admin login/logout
Route::get('/admin','admincontroller\AdminController@adminLogin');

//Dashboard
Route::get('/dashboard','admincontroller\AdminDashboardController@dashboard')->name('dashboard');

//Category
Route::get('/all-category','admincontroller\CategoryController@allCategory')->name('allcategory');
Route::get('/add-category','admincontroller\CategoryController@addCategory')->name('addcategory');

//Brand
Route::get('/all-brand','admincontroller\BrandController@allBrand')->name('allbrand');
Route::get('/add-brand','admincontroller\BrandController@addBrand')->name('addbrand');

//Product
Route::get('/all-product','admincontroller\ProductController@allProduct')->name('allproduct');
Route::get('/add-product','admincontroller\ProductController@addProduct')->name('addproduct');

//Icon
Route::get('/icon','admincontroller\IconController@icons')->name('icon');
Route::get('/add-icon','admincontroller\IconController@addIcon')->name('addicon');

//Navmenu
Route::get('/navmenu','admincontroller\NavmenuController@navmenus')->name('navmenu');
Route::get('/add-navmenu','admincontroller\NavmenuController@addNavmenu')->name('addnavmenu');

//Member
Route::get('/member','admincontroller\MemberController@allMember')->name('allmember');
Route::get('/add-member','admincontroller\MemberController@addMember')->name('addmember');

//Slider
Route::get('/slider','admincontroller\SliderController@slider')->name('slider');
Route::get('/add-slider','admincontroller\SliderController@addSlider')->name('addslider');
