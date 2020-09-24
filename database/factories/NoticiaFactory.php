<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Noticia;
use Faker\Generator as Faker;

$factory->define(Noticia::class, function (Faker $faker) {

    return [
        'titulo' => $faker->text,
        'descripcion' => $faker->text,
        'imagen' => $faker->text,
        'enlace_fuente' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
