<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBugTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bug', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('project_id');
            $table->string('bug',1000);
            $table->string('desc',1000);
            $table->string('debug',1000);
            $table->string('image',300);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bug');
    }
}
