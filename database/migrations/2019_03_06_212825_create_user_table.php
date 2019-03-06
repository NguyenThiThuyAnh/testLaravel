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
            $table->timestamps();
            $table->string('name',255);
            $table->string('email',255);
            $table->string('password',255);
            $table->string('address',255);
            $table->string('phone',255);
            $table->integer('gender')->comment('1:nam,2:nữ,3:other');
            $table->string('facebook_id',255);
            $table->string('google_id',255);
            $table->integer('status');
            $table->integer('id_group');
            $table->integer('id_department');
            $table->integer('is_admin');
            $table->integer('id_company');
            $table->integer('pemistion_app');
            $table->dateTime('last_visit');
            $table->string('remember_token');
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
