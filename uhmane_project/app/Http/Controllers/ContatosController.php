<?php

namespace Uhmane\Http\Controllers;

use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;
use Uhmane\Repositories\ContatosRepository;
use Uhmane\Services\ContatosService;


class ContatosController extends Controller
{
    /**
     * @var ContatosRepository
     */
    private $repository;

    /**
     * @var ContatosService
     */
    private $service;

    /**
     * ContatosController constructor.
     * Espera uma interface $repository que é uma camada de abstracao de modelo, para remover a injeção de depencia do
     * software
     * @param ContatosRepository $repository
     */
    public  function __construct(ContatosRepository $repository, ContatosService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
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
        return $this->service->create($request->all());
    }

    /**
     * Mostra um contato pelo ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->service->find($id);
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
        return $this->service->update($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       return  $this->service->delete($id);
    }
}
