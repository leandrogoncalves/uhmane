<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Uhmane\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Uhmane\Entities\Contatos::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'endereco' => $faker->streetAddress,
        'telefone' => $faker->phoneNumber,
        'celular' => $faker->phoneNumber,
        'email' => $faker->safeEmail
    ];
});