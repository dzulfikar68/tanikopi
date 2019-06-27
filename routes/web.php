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


use Illuminate\Support\Facades\Route;

Route::get('/', 'WelcomeController@index');
Route::get('/about', 'AboutController@index');
Route::get('/shop', 'ShopController@index');
Route::get('/faq', 'FaqController@index');
Route::get('/team', 'TeamController@index');
Route::get('/login', 'AuthController@index');

//confirmation user
Route::get('confirmation/{token}', 'RegisterController@confirmation');

//register
Route::post('/register/store', 'RegisterController@store');

//login
Route::post('/login', 'AuthController@login');
Route::get('/logout', 'AuthController@logout');

//=====================================
//UNTUK ADMIN
Route::get('admin/login', 'Admin\AuthController@index');
Route::post('admin/login', 'Admin\AuthController@login');
Route::get('admin/logout', 'Admin\AuthController@logout');

//middleware, harus login terlebih dahulu
Route::get('admin/', 'Admin\AuthController@dashboard')->middleware('auth.login');
Route::get('admin/dashboard', 'Admin\AuthController@dashboard')->middleware('auth.login');
Route::resource('admin/profil', 'ProfilController')->middleware('auth.login');
Route::resource('admin/produk', 'ProdukController')->middleware('auth.login');
Route::put('admin/produk/verify/{id}', 'ProdukController@verify')->middleware('auth.login');
Route::resource('admin/koperasi', 'KoperasiController')->middleware('auth.login');

// only for pengolah
// Route::get('/', '')->middleware('auth.login', 'auth.privilege:pengolah');

// only for koperasi
// Route::get('/', '')->middleware('auth.login', 'auth.privilege:koperasi');

//only for superadmin
Route::get('admin/user', 'Admin\UserController@index')->middleware('auth.login', 'auth.privilege:admin, pengolah');
Route::post('admin/user/create', 'Admin\UserController@store')->middleware('auth.login', 'auth.privilege:admin, pengolah');
Route::post('admin/user/update', 'Admin\UserController@update')->middleware('auth.login', 'auth.privilege:admin, pengolah');
Route::get('admin/user/delete/{id}', 'Admin\UserController@destroy')->middleware('auth.login', 'auth.privilege:admin, pengolah');
Route::put('admin/user/verify/{id}', 'Admin\UserController@verify')->middleware('auth.login', 'auth.privilege:admin, pengolah');

Route::get('admin/admin', 'Admin\AdminController@index')->middleware('auth.login', 'auth.privilege:admin, pengolah');
Route::post('admin/admin/create', 'Admin\AdminController@store')->middleware('auth.login', 'auth.privilege:admin, pengolah');
Route::post('admin/admin/update', 'Admin\AdminController@update')->middleware('auth.login', 'auth.privilege:admin, pengolah');
Route::get('admin/admin/delete/{id}', 'Admin\AdminController@destroy')->middleware('auth.login', 'auth.privilege:admin, pengolah');

// jika merupakan kombinasi, maka gunakan (misal admin & pengolah)
// Route::get('/', '')->middleware('auth.login', 'auth.privilege:admin,pengolah');
