<?php

use Faker\Generator as Faker;

$factory->define(App\Projeto::class, function (Faker $faker) {
    return [
        'prioridade' => 'NORMAL',
        'tarefa' => $faker->title,
        'acao' => $faker->word,
        'departamento' => 'Marketing',
        'status' => 'A',
    ];
});
