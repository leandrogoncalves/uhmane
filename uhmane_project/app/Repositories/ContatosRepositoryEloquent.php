<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 30/10/16
 * Time: 18:23
 */

namespace Uhmane\Repositories;


use Prettus\Repository\Eloquent\BaseRepository;
use Uhmane\Entities\Contatos;

class ContatosRepositoryEloquent extends BaseRepository implements ContatosRepository
{
    public function model()
    {
        return Contatos::class;
    }
}