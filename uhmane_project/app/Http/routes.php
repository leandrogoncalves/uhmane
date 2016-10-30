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

//endpoint para obter todos os contatos
Route::get('contatos', 'ContatosController@index');

//endpoint para inserção de contatos
Route::post('contatos', 'ContatosController@store');

//endpoint para buscar um contato pelo ID
Route::get('contatos/{id}', 'ContatosController@show');

//Endpoint para remover um contato
Route::delete('contatos/{id}', 'ContatosController@destroy');
