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
Route::auth();

Route::get('/admin', 'adminController@Index');
/*login*/
Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/register','PenggunaController@tambah');
Route::get('pembeli/tambah','PembeliController@tambah');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiController@index');
Route::post('pembeli/simpan','pembeliController@simpan');
// halaman lempar
Route::get('/batas', function () {
    return view('batas');        
});

Route::group(['middleware'=>'notadmin'],function(){

 /*routing pengguna*/
	Route::get('pengguna','PenggunaController@awal');
	Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');
	Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');	
/*routing kategori*/
	Route::get('kategori','kategoriController@awal');
	Route::get('kategori/tambah','kategoriController@tambah');
	Route::get('kategori/lihat/{kategori}','kategoriController@lihat');
	Route::post('kategori/simpan','kategoriController@simpan');
	Route::get('kategori/edit/{kategori}','kategoriController@edit');
	Route::post('kategori/edit/{kategori}','kategoriController@update');
	Route::get('kategori/hapus/{kategori}','kategoriController@hapus');
	/*routing transaksi*/
	Route::get('transaksi','transaksiController@awal');
	Route::get('transaksi/hapus/{transaksi}','transaksiController@hapus');

});


Route::group(['middleware'=>'notuser'],function(){
/*routing pencarian*/
	Route::post('/query','CariController@search');
	Route::get('query','CariController@search');
/*routing penawaran*/
	Route::post('penawaran/simpan','penawaranController@simpan');

/*routing barang*/
	Route::get('barang','barangController@awal');
	Route::get('barang/tambah','barangController@tambah');
	Route::get('barang/lihat/{barang}','barangController@lihat');
	Route::get('barang/pantau/{barang}','barangController@pantau');

	Route::get('barang/punya ','barangController@punya');
	Route::post('barang/simpan','barangController@simpan');
	Route::post('barang/punya/{barang}','barangController@punya');
	Route::get('barang/edit/{barang}','barangController@edit');
	Route::post('barang/edit/{barang}','barangController@update');
	Route::get('barang/hapus/{barang}','barangController@hapus');
/* routing pembeli*/
	Route::get('pembeli','pembeliController@awal');
	Route::get('pembeli/lihat/{pembeli}','pembeliController@lihat');
	Route::get('pembeli/edit','pembeliController@edit');
	Route::post('pembeli/edit/{pembeli}','pembeliController@update');
	Route::get('pembeli/hapus/{pembeli}','pembeliController@hapus');
/* routing transaksi*/
	Route::get('transaksi/deal/{barang}/{penawaran}/{pembeli}','transaksiController@deal');
	Route::get('transaksi/punya','transaksiController@punya');
	Route::post('transaksi/simpan','transaksiController@simpan');
	Route::post('transaksi/update/{transaksi}','transaksiController@update');
	

});
// Route::get('transaksi/edit','transaksiController@edit');
// Route::get('/home', 'HomeController@index');
/*routing pengguna*/
// Route::get('pengguna/tambah','PenggunaController@tambah');
// Route::post('pengguna/simpan','PenggunaController@simpan');
// Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
// Route::post('pengguna/edit/{pengguna}','PenggunaController@update');

/*routing postingan*/
// Route::get('postingan/tambah','postinganController@tambah');
// Route::get('postingan/lihat/{postingan}','postinganController@lihat');
// Route::post('postingan/simpan','postinganController@simpan');
// Route::get('postingan','postinganController@awal');
// Route::get('postingan/edit/{postingan}','postinganController@edit');
// Route::post('postingan/edit/{postingan}','postinganController@update');
// Route::get('postingan/hapus/{postingan}','postinganController@hapus');

/*routing transaksi*/
// Route::get('transaksi','transaksiController@awal');
// Route::get('transaksi/tambah','transaksiController@tambah');
// Route::get('transaksi/lihat/{transaksi}','transaksiController@lihat');
// Route::post('transaksi/simpan','transaksiController@simpan');
// Route::get('transaksi/edit/{transaksi}','transaksiController@edit');
// Route::post('transaksi/edit/{transaksi}','transaksiController@update');
// Route::get('transaksi/hapus/{transaksi}','transaksiController@hapus');