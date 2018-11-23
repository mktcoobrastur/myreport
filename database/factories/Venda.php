<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'atendente' => $faker->name,
        'qnt' => $faker->decimal,
        'plano' => 'GOLD',
        'created_at' => NOW(),
   ];
});
