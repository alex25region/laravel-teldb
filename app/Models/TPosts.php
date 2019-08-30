<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TPosts extends Model
{
    // поля в базе:
    // $table->increments('id');
    // $table->string('post', 100)->unique();


    // Соответственно далее указываем поля которые могут быть заполнены:
    // protected $fillable = [
    // 'post',
    // ];

    // Второй вариант: наоборот указать поля которые не нужно заполнять.
    // Для это испоьзовать:
    // protected $guarded = [
    //
    // ];

    // Поля id, created_at и update_at - не указывать, они заполняются автоматически.

    public function user() {

        return $this->belongsTo(TUsers::class);
    }


}
