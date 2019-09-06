<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\TUsers;
use App\Models\TPosts;
use App\Models\TOtdels;

$factory->define(TUsers::class, function (Faker $faker) {

    // поля в базе:
    // $table->increments('id');
    // $table->string('surname', 30);
    // $table->string('firstname', 30);
    // $table->string('secondname', 30);
    // $table->unsignedInteger('post_id');
    // $table->smallInteger('iptel')->nullable();
    // $table->string('tel', 50)->nullable();
    // $table->unsignedInteger('otdel_id');

    $faker = \Faker\Factory::create('ru_RU');
    $data = [
        'surname' => $faker->lastName,
        'firstname' => $faker->firstName,
        'secondname' => $faker->firstName,
        'iptel' => rand(1000,1999),
        'tel' => $faker->phoneNumber,
        'post_id' => function () {
            return TPosts::inRandomOrder()->first()->id;
        },
        'otdel_id' => function () {
        return TOtdels::inRandomOrder()->first()->id;
        }
    ];

    return $data;
});
