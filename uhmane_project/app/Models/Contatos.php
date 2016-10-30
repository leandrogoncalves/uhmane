<?php

namespace Uhmane\Models;

use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    protected $fillable =[
        'nome',
        'endereco',
        'bairro',
        'cidade',
        'estado',
        'telefone',
        'celular',
        'email',
        'site'
    ];
}
