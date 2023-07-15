<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Row;

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
    return view('auth.login');
});

Auth::routes();

//PDF
Route::get('download_laporan_pengurus', 'PDFController@generatePDF');

// Route 
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/anggota', 'HomeController@daftar')->name('anggota');
Route::get('/pengurus', 'HomeController@pengurus')->name('pengurus');
Route::get('keuangan', 'HomeController@keuangan')->name('keuangan');

//controller
Route::post('tambahanggota', 'SystemControllers@createanggota')->name('tambahanggota');
Route::post('tambahkeuangan', 'SystemControllers@createkeuangan')->name('tambahkeuangan');
Route::delete('/anggota/{id}', 'SystemControllers@hapusanggota')->name('anggota.hapus');
Route::post('tambahjabatan', 'SystemControllers@createjabatan')->name('tambahjabatan');
Route::match(['get', 'post'], '/update/{id}', 'SystemControllers@updateanggota');
