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

        'surname' => $faker->firstName,
        'firstname' => $faker->firstName,
        'secondname' => $faker->firstName,
        'iptel' => rand(1000,1999),
        'tel' => $faker->phoneNumber,
        'post_id' => factory(TPosts::class),
        'otdel_id' => factory(TOtdels::class),
    ];

    return $data;
});


//$factory->defineAs(TUsers::class, 'admin', function (Faker $faker) {
//
//    $data = [
//
//        'surname' => 'admin',
//        'firstname' => 'admin',
//        'secondname' => 'admin',
//        'iptel' => rand(1000,1999),
//        'tel' => rand(200000,900000),
//        'post_id' => '1',
//        'otdel_id' => '2',
//    ];
//
//    return $data;
//});