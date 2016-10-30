<?php

namespace Uhmane\Http\Controllers;

use Illuminate\Http\Request;
use Uhmane\Repositories\ContatosRepository;


class ContatosController extends Controller
{
    /**
     * @var ContatosRepository
     */
    private $repository;

    /**
     * ContatosController constructor.
     * Espera uma interface $repository que é uma camada de abstracao de modelo, para remover a injeção de depencia do
     * software
     * @param ContatosRepository $repository
     */
    public  function __construct(ContatosRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Retorna todos os dados de contatos cadastrados
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->repository->all();
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
        return $this->repository->create($request->all());
    }

    /**
     * Mostra um contato pelo ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->repository->find($id);
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
        $this->repository->find($id)->delete();
    }
}
