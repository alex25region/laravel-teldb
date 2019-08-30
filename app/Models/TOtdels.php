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

    // Можно указать поля для обновления, но так как все будут обновляться то нет смысла!
    // protected $fillable = [
    //         'otdel',
    //         'address',
    //         'telefon',
    //         'email',
    //     ];

    // функуция $guarded значит исключить из обновления
    // НО, ПОЛЯ id, created_at, updated_at обновляются автоматически!!!!!
    // Соответственно ниже строчки не имееют смысла:
    // protected $guarded = [
    //         'id'
    //     ];
}
