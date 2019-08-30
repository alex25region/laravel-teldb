<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TPosts;
use Faker\Generator as Faker;

$factory->define(TPosts::class, function (Faker $faker) {

    // поля в базе:
    // $table->increments('id');
    // $table->string('post', 100)->unique();

    $faker = \Faker\Factory::create('ru_RU');

    return [
        'post' => $faker->jobTitle,
    ];
});
