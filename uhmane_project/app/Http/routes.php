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
        Route::get('', 'ApiContatosController@index');

        //endpoint para inserção de contatos
        Route::post('', 'ApiContatosController@store');

        //endpoint para buscar um contato pelo ID
        Route::get('{id}', 'ApiContatosController@show');

        //endpoint para alterar um contato pelo ID
        Route::put('{id}', 'ApiContatosController@update');

        //Endpoint para remover um contato
        Route::delete('{id}', 'ApiContatosController@destroy');

    });
});

Route::get('docs','DocsController@index');

Route::get('contatos','ContatosController@index');


