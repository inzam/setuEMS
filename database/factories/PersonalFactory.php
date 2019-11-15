<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Personal;
use Faker\Generator as Faker;

$factory->define(Personal::class, function (Faker $faker) {
    return [
    'nid'=>$faker->unique()->randomDigit,
    'passport'=>$faker->randomDigit,
    'dl'=>$faker->boolean,
    'dob'=>$faker->date(),
    'gender'=>$faker->randomElements(['male','female','other']),
    'father'=>$faker->name('male'),
    'mother'=>$faker->name('female'),
    'gurrantor'=>$faker->name,
    'maritalstatus'=>$faker->randomElements(['married','unmarried','divorced','widowed']),

    'presentaddress'=>$faker->address,
    'permanentaddress'=>$faker->address
    ];
});
