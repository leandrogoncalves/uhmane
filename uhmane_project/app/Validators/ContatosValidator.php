<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 30/10/16
 * Time: 19:29
 */

namespace Uhmane\Validators;


use Prettus\Validator\LaravelValidator;

class ContatosValidator extends LaravelValidator
{
    protected $rules = [
        'nome'  => 'required|max:100',
        'email' => 'required|email'
    ];
}