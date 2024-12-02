<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DosenController;

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

// Route::get('/', function () {
//     return view('landing.uts');
// });

Route::get('/','App\Http\Controllers\PageCounterController@index');

//route uts
Route::get('/hello', 'App\Http\Controllers\UtsController@hello');
Route::get('/style', 'App\Http\Controllers\UtsController@style');
Route::get('/style2', 'App\Http\Controllers\UtsController@style2');
Route::get('/terimakasih', 'App\Http\Controllers\UtsController@terimakasih');
Route::get('/responsive', 'App\Http\Controllers\UtsController@responsive');
Route::get('/form', 'App\Http\Controllers\UtsController@form');
Route::get('/linktree', 'App\Http\Controllers\UtsController@linktree');
Route::get('/testimoni', 'App\Http\Controllers\UtsController@testimoni');

Route::get('/error', function () {
    return "<h1> Server Error: Ada Kesalahn di Server </h1>";
});

// route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('dosen','App\Http\Controllers\DosenController@index');
Route::get('blog2','App\Http\Controllers\DosenController@blog');
Route::get('biodata','App\Http\Controllers\DosenController@biodata');
//Route::get('/pegawai/{nama}', 'App\Http\Controllers\PegawaiController@index');



Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

Route::get('/pegawai','App\Http\Controllers\PegawaiDBController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiDBController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiDBController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiDBController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiDBController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiDBController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiDBController@cari');

Route::get('/kaos','App\Http\Controllers\KaosController@indexkaos');
Route::get('/kaos/tambahkaos','App\Http\Controllers\KaosController@tambahkaos');
Route::post('/kaos/storekaos','App\Http\Controllers\KaosController@storekaos');
Route::get('/kaos/editkaos/{kode}','App\Http\Controllers\KaosController@editkaos');
Route::post('/kaos/updatekaos','App\Http\Controllers\KaosController@updatekaos');
Route::get('/kaos/hapuskaos/{kode}','App\Http\Controllers\KaosController@hapuskaos');
Route::get('/kaos/carikaos','App\Http\Controllers\KaosController@carikaos');
