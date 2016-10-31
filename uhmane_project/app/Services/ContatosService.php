<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 30/10/16
 * Time: 19:17
 */

namespace Uhmane\Services;


use Illuminate\Http\Response;
use Prettus\Validator\Exceptions\ValidatorException;
use Uhmane\Repositories\ContatosRepository;
use Uhmane\Validators\ContatosValidator;

/**
 * Camada de serviço para regras de negócio especificas para contatos
 * Class ContatosService
 * @package Uhmane\Services
 */
class ContatosService
{
    /**
     * @var ContatosRepository
     */
    protected $repository;

    /**
     * @var ContatosValidator
     */
    protected $validator;

    /**
     * ContatosService constructor.
     * @param ContatosRepository $repository
     */
    public function __construct(ContatosRepository $repository, ContatosValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }


    /**
     * serviço para criação de um contato
     * @param array $data
     * @return mixed
     */
    public function find($id)
    {
        try{
            return $this->repository->find($id);
        }catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e){
            return Response::create([
                'message'=> 'Nenhum contato encontrado'
            ],400);
        }
    }


    /**
     * serviço para criação de um contato
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        try{
            $this->validator->with($data)->passesOrFail();
            return $this->repository->create($data);
        }catch (ValidatorException $e){
            return response()->json([
                'error'   => true,
                'message' => $e->getMessageBag()
            ],400);
        }
    }

    /**
     * Serviço para alteração de um contato
     * @param array $data
     * @param $id
     */
    public function update(array $data, $id)
    {
        try{
            $this->repository->find($id);
            $this->validator->with($data)->passesOrFail();
            return $this->repository->update($data, $id);
        }catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e){
            return Response::create([
                'message'=> 'Nenhum contato encontrado'
            ],400);
        }catch (ValidatorException $e){
            return response()->json([
                'error'   => true,
                'message' => $e->getMessageBag()
            ],400);
        }

    }

    /**
     * Serviço para exclusao de um contato
     * @param array $data
     * @param $id
     */
    public function delete($id)
    {
        try{
            $this->repository->find($id);
            $this->repository->delete($id);
        }catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e){
            return Response::create([
                'message'=> 'Nenhum contato encontrado'
            ],400);
        }
    }
}