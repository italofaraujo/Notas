<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Note;
use Faker\Generator as Faker;

$factory->define(Note::class, function (Faker $faker) {
    return [
        'title'=> $faker->text(50),
        'description' => $faker->text(),
        'id_folder' => $faker->randomElement(\DB::table('folders')->pluck('id'))
    ];
});
