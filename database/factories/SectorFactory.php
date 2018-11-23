<?php

use Faker\Generator as Faker;


$factory->define(App\Sector::class, function (Faker $faker) {
    return [
        'name' => $faker->lastName,
        'img' => $faker->randomNumber(1),
                
    ];
});
