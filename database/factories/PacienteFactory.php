<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Paciente;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Paciente::class, function (Faker $faker) {
    return [
        'cpf' => $faker->numberBetween(1000,2000),
        'nome' => $faker->name,
        'rg' => $faker->numberBetween(1000,2000),
        'cartao_sus' => $faker->numberBetween(1000,2000),
        'sexo' => $faker->name,          
        'nascimento' => now(),
        'nome_mae' => $faker->name,
        'telefone' => $faker->phoneNumber,
        'cep' => $faker->numberBetween(10,200),
        'rua' => $faker->name,
        'numero' => $faker->numberBetween(0,20),
        'quadra' => $faker->numberBetween(0,20),
        'lote' => $faker->numberBetween(0,20),
        'complemento' => $faker->name,
        'bairro' => $faker->name,
        'cidade' => $faker->name,           
        'uf' => Str::random(2),
    ];
});
