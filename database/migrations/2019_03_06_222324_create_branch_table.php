<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('id_company');
            $table->string('name');
            $table->string('email',255);
            $table->string('phone',255);
            $table->string('address',255);
            $table->string('tax_code');
            $table->string('type');
            $table->binary('longitude');
            $table->string('latitude');
            $table->integer('is_del');
            $table->string('timestamps',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branch');
    }
}
