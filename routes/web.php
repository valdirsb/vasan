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

Route::get('/', 'HomeController@index');

Route::get('/quemsomos', 'HomeController@quemSomos');
Route::get('/servicos', 'HomeController@servicos');
Route::get('/produtos', 'HomeController@produtos');
Route::get('/faleconosco', 'HomeController@faleconosco');



Auth::routes();

Route::get('/admin', 'Admin\HomeController@index')->name('admin');
