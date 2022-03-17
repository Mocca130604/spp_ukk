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

//Route::get('/', function () {
//    return view('welcome');
//});

// harus di hapus
Route::get('home',function () {

    return view('home');
}); 
// harus di hapus





Route::get('user_daftar','UserController@show'); 
Route::get('user/add','UserController@add');  
Route::post('useradd','UserController@addprocces');
Route::get('user/edit/{id}','UserController@edit');  
Route::patch('useredit/{id}','UserController@editprocces'); 
Route::delete('userdelete/{id}','UserController@destroy');


Route::get('kelas_daftar','KelasController@show'); 
Route::get('kelas/add','KelasController@add');
Route::post('kelasadd','KelasController@addprocces');
Route::get('kelas/edit/{id}','kelasController@edit');
Route::patch('kelasedit/{id}','KelasController@editprocces');
Route::delete('kelasdelete/{id}','kelasController@destroy');


Route::resource('siswa','SiswaController');
Route::post('siswa/search','SiswaController@show');

Route::resource('transaksi','TransaksiController');

Route::resource('laporan','LaporanController');
Route::post('siswa/search','LaporanController@show');

Route::resource('spp','SppController');

Route::resource('angkatan','AngkatanCotroller');

Route::resource('tahun','TahunController');

Route::get('login','LoginController@index');
Route::post('postlogin','LoginController@postlogin');
