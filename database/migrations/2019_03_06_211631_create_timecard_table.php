<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimecardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timecard', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('id_user');
            $table->integer('action');
            $table->string('longitude',255);
            $table->string('latitude',255);
            $table->integer('status')->comment('0:đi đúng giờ, 1:đi trễ,2:nghĩ không phép');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timecard');
    }
}
