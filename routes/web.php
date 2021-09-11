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






    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('cliente/list', ['uses' => 'ClienteController@list']);
    Route::resource('cliente', 'ClienteController');






    Route::group(['prefix' => 'produtos', 'where' => ['prefix' => 'produtos']],  function() {
        Route::get('/', ['as' =>'produtos.index', 'uses' => 'ProdutosController@index']);
    });


    Route::group(['prefix' => 'gerenciar', 'where' => ['prefix' => 'gerenciar']],  function() {
        Route::get('/', ['as' => 'gerenciar', 'uses' => 'GerenciarController@index']);
        Route::get('/list', ['as' => 'gerenciar.list', 'uses' => 'GerenciarController@list']);
        Route::delete('/{produto}', ['as' =>'gerenciar.destroy', 'uses' => 'GerenciarController@destroy']);
        Route::get('/{produto}/edit', ['as' =>'gerenciar.edit', 'uses' => 'GerenciarController@edit']);
        Route::put('/{produto}', ['as' =>'gerenciar.update', 'uses' => 'GerenciarController@update']);
        Route::post('/', ['as' =>'gerenciar.store', 'uses' => 'GerenciarController@store']);
        Route::get('/create', ['as' =>'gerenciar.create', 'uses' => 'GerenciarController@create']);
        
    });






