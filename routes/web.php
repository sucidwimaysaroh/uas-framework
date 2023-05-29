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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/AkunPengguna', 'HomeController@AkunPengguna')->name('AkunPengguna');
Route::get('/EditAkunPengguna/{User}/edit', 'HomeController@EditAkunPengguna')->name('EditAkunPengguna');
Route::patch('/EditAkunPengguna/{User}', 'HomeController@UpdateAkun');
Route::get('/ProdukPengguna/{Product}', 'HomeController@show')->name('ProdukPengguna');
Route::get('/ProdukPengguna/{Product}/edit', 'ProductController@edit');
Route::patch('/ProdukPengguna/{Product}', 'ProductController@update');
Route::delete('/ProdukPengguna/{Product}', 'ProductController@destroy');
//produksemua
Route::get('/SemuaProduk', 'ProductController@index')->name('SemuaProduk');
Route::get('/SemuaProduk/{Product}', 'ProductController@show')->name('ProdukPengguna');
Route::get('/CreateProduk', 'ProductController@create')->name('CreateProduk');
Route::post('/CreateProduk', 'ProductController@store');

//order produk
Route::post('/Order', 'OrderController@storeOrderan')->name('Order');
Route::get('/OrderProduk', 'OrderController@index')->name('OrderProduk');

//transaction
Route::post('/Transaksi/{order}', 'TransactionController@store');
Route::get('/SemuaOrder', 'OrderController@OrderSelesai')->name('SemuaOrder');
Route::get('/Penjualan', 'OrderController@penjualan')->name('Penjualan');
Route::get('/Penjualan/{transaction}', 'TransactionController@show');
