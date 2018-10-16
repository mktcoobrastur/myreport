<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
        return [
            'nome' => $faker->name,
            'status' => 'ATIVO',
            'id_representante' => '13',
        ];
});
