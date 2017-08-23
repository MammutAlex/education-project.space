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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Calendar::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'description' => $faker->text($maxNbChars = 200),
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'url' => $faker->url,
    ];
});
