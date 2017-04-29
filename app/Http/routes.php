<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    //return view('welcome');
    return view('master');	
});


Route::get('/adminex', function () {
    return view('admin.cth');
});

Route::get('/ui', function () {
    return view('admin.ui');
});
Route::get('/table', function () {
    return view('admin.table');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/blank', function () {
    return view('blank');
});
Route::get('/chart', function () {
    return view('chart');
});
Route::get('/tab-panel', function () {
    return view('admin.tab-panel');        
});


Route::auth();

Route::get('/home', 'HomeController@index');
/*routing admin*/
Route::get('/admin', 'adminController@Index');

/*login*/
Route::get('/login','SesiController@form');
Route::get('/login/admin','SesiController@form');

Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::post('/','SesiController@index');

/*routing pengguna*/
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');
/*routing postingan*/
Route::get('postingan/tambah','postinganController@tambah');
Route::get('postingan/lihat/{postingan}','postinganController@lihat');
Route::post('postingan/simpan','postinganController@simpan');
Route::get('postingan','postinganController@awal');
Route::get('postingan/edit/{postingan}','postinganController@edit');
Route::post('postingan/edit/{postingan}','postinganController@update');
Route::get('postingan/hapus/{postingan}','postinganController@hapus');
/*routing transaksi*/
Route::get('transaksi','transaksiController@awal');
Route::get('transaksi/tambah','transaksiController@tambah');
Route::get('transaksi/lihat/{transaksi}','transaksiController@lihat');
Route::post('transaksi/simpan','transaksiController@simpan');
Route::get('transaksi/edit/{transaksi}','transaksiController@edit');
Route::post('transaksi/edit/{transaksi}','transaksiController@update');
Route::get('transaksi/hapus/{transaksi}','transaksiController@hapus');
/*routing kategori*/
Route::get('kategori','kategoriController@awal');
Route::get('kategori/tambah','kategoriController@tambah');
Route::get('kategori/lihat/{kategori}','kategoriController@lihat');
Route::post('kategori/simpan','kategoriController@simpan');
Route::get('kategori/edit/{kategori}','kategoriController@edit');
Route::post('kategori/edit/{kategori}','kategoriController@update');
Route::get('kategori/hapus/{kategori}','kategoriController@hapus');
    
Route::group(['middleware'=>'AuthentifikasiUser'],function(){



});