<?php

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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/abc', function () {
    //return view('home');
//});
Route::get('/pendapatan/grafik', function () {
    return view('grafikpendapatan');
})->name("grafik");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Dibawah Comment Ini Route Tentang Pendapatan
Route::get('/pendapatan', 'PendapatanController@index'); 


//Dibawah Comment Ini Route Tentang Pengeluaran
Route::get('/pengeluaran', 'PengeluaranController@index'); 


//Dibawah Comment Ini Route Tentang Pengunjung
Route::get('/pengunjung', 'PengunjungController@index'); 


