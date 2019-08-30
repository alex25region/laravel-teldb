<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TOtdels;
use Faker\Generator as Faker;

$factory->define(TOtdels::class, function (Faker $faker) {

    // поля в базе:
    // $table->increments('id');
    // $table->string('otdel')->unique();
    // $table->string('address');
    // $table->string('telefon', 50);
    // $table->string('email');

    // Локализация (русские значения):
    $faker = \Faker\Factory::create('ru_RU');

    return [
        'otdel' => $faker->sentence(rand(3, 8), true),
        'address' => $faker->address,
        'telefon' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
    ];
});
