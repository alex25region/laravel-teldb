<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TUsers extends Model
{
    // поля в базе:
    // $table->increments('id');
    // $table->string('surname', 30);
    // $table->string('firstname', 30);
    // $table->string('secondname', 30);
    // $table->unsignedInteger('post_id');
    // $table->smallInteger('iptel')->nullable();
    // $table->string('tel', 50)->nullable();
    // $table->unsignedInteger('otdel_id');

    // Соответственно далее указываем поля которые могут быть заполнены:

    protected $fillable = [
        'surname',
        'firstname',
        'secondname',
        'post_id',
        'iptel',
        'tel',
        'otdel_id'
    ];

    // Юзер имеет 1 должность:
    public function post() {
        //return $this->hasOne("App\Models\TPost");   // можно так
        //return $this->hasOne(TPosts::class, 'post_id', 'id');
        return $this->hasOne(TPosts::class);  // лучше так
    }

    // Юзер имеет 1 отдел:
    public function otdel() {
        //return $this->hasOne(TOtdels::class, 'otdel_id', 'id');
        return $this->hasOne(TOtdels::class);
    }

}
