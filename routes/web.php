<?php

use App\Http\Controllers\HalamansiswaController;
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

//halaman sisswa
Route::post('semoga/saya/lulus', 'HalamansiswaController@cetak')->name('cetak')->middleware('role:siswa');
