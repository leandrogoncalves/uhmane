<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Rotas para a API de Contatos
Route::group(['prefix'=>'api'],function(){
    Route::group(['prefix' => 'contatos'], function(){
        //endpoint para obter todos os contatos
        Route::get('', 'ContatosController@index');

        //endpoint para inserção de contatos
        Route::post('', 'ContatosController@store');

        //endpoint para buscar um contato pelo ID
        Route::get('{id}', 'ContatosController@show');

        //endpoint para alterar um contato pelo ID
        Route::put('{id}', 'ContatosController@update');

        //Endpoint para remover um contato
        Route::delete('{id}', 'ContatosController@destroy');

    });
});

