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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/prodi', ['middleware' => 'auth', 'uses' =>'ProdiController@index']);
Route::get('/prodi/create', ['middleware' => 'auth', 'uses' =>'ProdiController@create']);
Route::post('/prodi/store', ['middleware' => 'auth', 'uses' =>'ProdiController@store']);
Route::get('/prodi/edit/{id}', ['middleware' => 'auth', 'uses' =>'ProdiController@edit']);
Route::post('/prodi/update/{id}', ['middleware' => 'auth', 'uses' =>'ProdiController@update']);
Route::delete('/prodi/delete/{id}', ['middleware' => 'auth', 'uses' =>'ProdiController@destroy']);

Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/create', 'MahasiswaController@create');
Route::post('/mahasiswa/store', 'MahasiswaController@store');
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit');
Route::post('/mahasiswa/update/{id}', 'MahasiswaController@update');
Route::delete('/mahasiswa/delete/{id}', 'MahasiswaController@destroy');
