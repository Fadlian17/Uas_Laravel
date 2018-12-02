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

Route::prefix('barang')->middleware('auth')->group(function(){
	Route::get('/','BarangController@index');
	Route::get('/tambahBarang','BarangController@add');
	Route::get('/editBarang/{id}','BarangController@edit');
	Route::post('/simpanBarang','BarangController@save');
	Route::post('/updateBarang/{id}','BarangController@update');
	Route::get('/deleteBarang/{id}','BarangController@delete');
});

Route::prefix('gudang')->middleware('auth')->group(function(){
	Route::get('/','GudangController@index');
	Route::get('/tambahGudang','GudangController@add');
	Route::get('/editGudang/{id}','GudangController@edit');
	Route::post('/simpanGudang','GudangController@save');
	Route::post('/updateGudang/{id}','GudangController@update');
	Route::get('/deleteGudang/{id}','GudangController@delete');
});