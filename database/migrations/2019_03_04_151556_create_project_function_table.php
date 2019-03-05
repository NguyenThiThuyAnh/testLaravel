<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectFunctionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_functions', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->integer('estimated_time');
            $table->integer('log_time');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('assign_id');
            $table->integer('priority');
            $table->integer('project_id');
            $table->string('desc');
            $table->string('status');
            $table->string('type');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_functions', function (Blueprint $table) {
            //
        });
    }
}
