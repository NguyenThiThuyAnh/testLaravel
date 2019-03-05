<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',30);
            $table->string('email',50);
            $table->string('password',72);
            $table->string('phone',11);
            $table->integer('gender');
            $table->date('birthdate');
            $table->text('address');
            $table->string('avatar',50);
            $table->text('advantages');
            $table->text('defect');
            $table->text('hobby');
            $table->integer('marital');
            $table->string('url_fb',300);
            $table->integer('group_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
