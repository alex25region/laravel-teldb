<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_users', function (Blueprint $table) {

            // таблица пользователи

            $table->increments('id');
            $table->string('surname', 30);
            $table->string('firstname', 30);
            $table->string('secondname', 30);
            $table->unsignedInteger('post_id');
            $table->smallInteger('iptel')->nullable();
            $table->string('tel', 50)->nullable();
            $table->unsignedInteger('otdel_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('post_id')->references('id')->on('t_posts');
            $table->foreign('otdel_id')->references('id')->on('t_otdels');

            $table->index(['surname', 'firstname', 'iptel']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_users');
    }
}
