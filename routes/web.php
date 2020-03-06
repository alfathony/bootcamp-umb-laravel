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

/**
 * Dokumentasi https://laravel.com/docs/6.x/routing
 * 
 * Perbedaan Route::get dan Route::post
 * 
 * Route::get, tanpa ada kirim data ke url tujuan
 * Route::post, sambibl ada kirim ada ke url tujuan
 * 
 * Anatomi syntax route
 * Route::get('/buat-url/yang-lo-mau/kayagini', 'SipaControllerYangAhndle@methodnya')->name('kasih_identitas_routenya')
 */

// Rute untuk homepage, halaman pertama kali di akses, halaman utama dengan nama name('home)
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rute untuk halaman about us dengan nama name('about)
Route::get('/about-us', 'AboutController@index')->name('about');

// Rute untuk menampilkan list buku tamu
Route::get('/buku-tamu', 'BukutamuController@index')->name('bukutamu');

// Rute untuk menampilkan form tambah buku tamu
Route::get('/buku-tamu/tambah', 'BukutamuController@add')->name('tambah_bukutamu'); 
// Rute utnuk mengirimkan data buku tamu dari form. Dengan method POST
Route::post('/buku-tamu/tambah', 'BukutamuController@store')->name('simpan_bukutamu');

// Rute untuk menampilkan form edit buku tamu
Route::get('/buku-tamu/edit/{id}', 'BukutamuController@edit')->name('edit_bukutamu'); 
// Rute untuk mengirimkan data dari form edit. Dengan method POST
Route::post('/buku-tamu/update/{id}', 'BukutamuController@update')->name('update_bukutamu');

// Rute untuk menghapus buku tamu
Route::get('/buku-tamu/hapus/{id}', 'BukutamuController@hapus')->name('hapus_bukutamu'); 