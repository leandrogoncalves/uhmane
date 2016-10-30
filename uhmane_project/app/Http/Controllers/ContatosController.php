<?php

namespace Uhmane\Http\Controllers;

use Illuminate\Http\Request;

use Uhmane\Http\Requests;
use Uhmane\Http\Controllers\Controller;
use \Uhmane\Contatos;

class ContatosController extends Controller
{
    /**
     * Retorna todos os dados de contatos cadastrados
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Contatos::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Contatos::create($request->all());
    }

    /**
     * Mostra um contato pelo ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Contatos::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contatos::find($id)->delete();
    }
}
