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

Route::get('test', function () {
    return view('layouts.master');
});
Route::get('cetak', function () {
    return view('halamansiswa.cetak');
});
Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/screenlock', 'HomeController@screenlock')->name('screenlock');
Route::get('/mapel', 'MapelController@index')->middleware('role:admin')->name('mapel.index');
Route::post('/mapel/import', 'MapelController@importMapel')->middleware('role:admin')->name('mapel.import');

Route::get('/siswa', 'SiswaController@index')->middleware('role:admin')->name('siswa.index');
Route::post('/siswa/import', 'SiswaController@importSiswa')->middleware('role:admin')->name('siswa.import');
Route::get('/siswa/lihat/{id}', 'SiswaController@lihatsiswa')->middleware('role:admin')->name('siswa.lihat');
Route::post('/siswa/cetak/', 'SiswaController@cetak')->middleware('role:admin')->name('siswa.cetak');
Route::get('/siswa/hapus/{id}', 'SiswaController@hapus')->middleware('role:admin')->name('siswa.hapus');
Route::get('/siswa/edit/{id}', 'SiswaController@ubah')->middleware('role:admin')->name('siswa.edit');
Route::post('/siswa/edit', 'SiswaController@ubahproses')->middleware('role:admin')->name('siswa.ubah.proses');

//halaman sisswa
Route::get('siswa/profile', 'HalamansiswaController@profile')->name('profile')->middleware('role:siswa|admin');
Route::post('semoga/saya/lulus', 'HalamansiswaController@cetak')->name('cetak')->middleware('role:siswa|admin');
