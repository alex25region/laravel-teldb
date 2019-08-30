<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TOtdels extends Model
{
    // поля в базе:
    // $table->increments('id');
    // $table->string('otdel')->unique();
    // $table->string('address');
    // $table->string('telefon', 50);
    // $table->string('email');

//    protected $fillable = [
//            'otdel',
//            'address',
//            'telefon',
//            'email',
//        ];

    protected $guarded = [
        'id'
    ];
}
