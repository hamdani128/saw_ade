<?php

use Illuminate\Support\Facades\Auth;
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
    return view('layouts.login');
});

Auth::routes();
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    Route::get('/alternatif', 'saw\AlternatifController@index')->name('alternatif');
    Route::post('/alternatif-create', 'saw\AlternatifController@store');
    Route::get('/edit/alternatif/{id}', 'saw\AlternatifController@edit');
    Route::post('/update/alternatif/{id}', 'saw\AlternatifController@update');
    Route::get('/delete/alternatif/{id}', 'saw\AlternatifController@destroy');

    Route::get('/assesment', 'saw\AssesmentController@index')->name('assesment');
    Route::get('/alternatif/instansi/{id}', 'saw\AlternatifController@nama_instansi');
    Route::post('/assesment-create', 'saw\AssesmentController@store')->name('assesment-create');
    Route::get('/edit/assesment/{id}', 'saw\AssesmentController@edit');
    Route::post('/update/assesment/{id}', 'saw\AssesmentController@update');
    Route::get('/delete/assesment/{id}', 'saw\AssesmentController@destroy');

    Route::get('/criteria', 'saw\CriteriaController@index')->name('kriteria');
    Route::get('/saw-method', 'saw\MetodeController@index')->name('metode-saw');
    Route::get('/saw-method/printpriview', 'saw\MetodeController@printpriview')->name('printpriview');
});
// Route::get('/home', 'HomeController@index')->name('home');
