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

//LISTAR OS PRODUTOS
Route::prefix('/produtos')->group(function(){
    Route::get('/','ProdutosController@index');
    Route::get('/vasandelivery','ProdutosController@vasandelivery');
    Route::get('/vasanadvogados','ProdutosController@vasanadvogados');
    Route::get('/vasanglpi','ProdutosController@vasanglpi');
    Route::get('/vasanlojavirtual','ProdutosController@vasanlojavirtual');
});

Route::prefix('/faleconosco')->group(function(){
    Route::get('/','FaleConoscoController@index');
    Route::post('/','FaleConoscoController@enviar');
});


Auth::routes();

Route::get('/admin', 'Admin\HomeController@index')->name('admin');
