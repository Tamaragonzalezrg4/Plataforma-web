<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tabla;
use Faker\Generator as Faker;

$factory->define(Tabla::class, function (Faker $faker) {

    return [
        'femenino' => $faker->text,
        'masculino' => $faker->text,
        'ambos' => $faker->text,
        'otro' => $faker->text,
        'encarnacion' => $faker->text,
        'cambyreta' => $faker->text,
        'coronel_bogado' => $faker->text,
        'capitan_mirando' => $faker->text,
        'positivo' => $faker->text,
        'negativo' => $faker->text,
        'recuperado' => $faker->text,
        'fallecido' => $faker->text,
        'inconcluso' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
