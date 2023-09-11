<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/latihan2','App\Http\Controllers\LatCon@home');
Route::get('/latihan2/produk','App\Http\Controllers\LatCon@produk');
Route::get('/latihan2/kontak','App\Http\Controllers\LatCon@kontak');


Route::get('/bukutamu','App\Http\Controllers\BukutamuController@index');
Route::get('/bukutamu/tambah','App\Http\Controllers\BukutamuController@tambah');

Route::post('/bukutamu/storetambah','App\Http\Controllers\BukutamuController@store');
Route::get('/bukutamu/edit/{id}','App\Http\Controllers\BukutamuController@edit');
Route::post('/bukutamu/update','App\Http\Controllers\BukutamuController@update');


Route::get('/bukutamu/delete/{id}', 'App\Http\Controllers\BukutamuController@delete');