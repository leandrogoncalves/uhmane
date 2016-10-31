@extends('template')

@section('title')
    Documentação da API
@stop


@section('content')
    <h1>Documentação da API</h1>
    <pre>
        +--------+----------+-------------------+------+-------------------------------------------------------+------------+
        | Domain | Method   | URI               | Name | Action                                                | Middleware |
        +--------+----------+-------------------+------+-------------------------------------------------------+------------+
        |        | GET|HEAD | /                 |      | Closure                                               |            |
        |        | GET|HEAD | api/contatos      |      | Uhmane\Http\Controllers\ApiContatosController@index   |            |
        |        | POST     | api/contatos      |      | Uhmane\Http\Controllers\ApiContatosController@store   |            |
        |        | GET|HEAD | api/contatos/{id} |      | Uhmane\Http\Controllers\ApiContatosController@show    |            |
        |        | PUT      | api/contatos/{id} |      | Uhmane\Http\Controllers\ApiContatosController@update  |            |
        |        | DELETE   | api/contatos/{id} |      | Uhmane\Http\Controllers\ApiContatosController@destroy |            |
        |        | GET|HEAD | contatos          |      | Uhmane\Http\Controllers\ContatosController@index      |            |
        |        | GET|HEAD | docs              |      | Uhmane\Http\Controllers\DocsController@index          |            |
        +--------+----------+-------------------+------+-------------------------------------------------------+------------+

    </pre>
@stop
