<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
            'comentario' => $faker->title,
            'id_tarefa' => '13',
            'status' => 'ATIVO',
   ];
});
